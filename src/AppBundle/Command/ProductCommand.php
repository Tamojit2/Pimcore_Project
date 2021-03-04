<?php

namespace AppBundle\Command;

use Pimcore\Console\AbstractCommand;
use Pimcore\Model\DataObject\ClassDefinition\Data;
use Pimcore\Console\Dumper;
use Symfony\Component\Translation\Loader\CsvFileLoader;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Pimcore\Model\Asset\MetaData\ClassDefinition\Data\Asset;
use Pimcore\Model\DataObject\Products;
use Pimcore\Model\DataObject\Category;
use Pimcore\Model\DataObject\Brand;
use Pimcore\Model\DataObject\Material;
use Pimcore\Model\DataObject\AbstractObject;


class ProductCommand extends AbstractCommand
{
    protected function configure()
    {
        $this
            ->setName('product:save')
            ->setDescription('add new products');
            //$this->addOption('file', 'b', InputOption::VALUE_REQUIRED, 'abc');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
    
    
    
    		$brand = new \Pimcore\Model\DataObject\Importdata\Listing();
                $brand->setCondition('class_name = ?', 'Products');
                $brand->addConditionParam('status = ?', false);
                //$brand->setCondition(status = ?, false);
                $brand->setLimit(2);
                foreach ($brand as $path) {
                	
                	//p_r($path);die;
                	$file = $path->getFile();
                    	$file=(PIMCORE_PROJECT_ROOT . '/web/var/assets' .$file->getPath().$file->getFilename());
                	//p_r(PIMCORE_PROJECT_ROOT . '/web/var/assets' .$file->getPath().$file->getFilename());die;
                	//p_r($file);die;
         	
            	}
    
    		
    		if (($handle = fopen($file, "r")) !== FALSE) {
		    $csvs = [];
		    while(! feof($handle)) {
		       $csvs[] = fgetcsv($handle);
		    }
		    $datas = [];
		    $column_names = [];
		    foreach ($csvs[0] as $single_csv) {
			$column_names[] = $single_csv;
		    }
		    foreach ($csvs as $key => $csv) {
			if ($key === 0) {
			    continue;
			}
			foreach ($column_names as $column_key => $column_name) {
			    $datas[$key-1][$column_name] = $csv[$column_key];
			}
		    }
		    //p_r($datas);die;
		    $json = json_encode($datas);
		    fclose($handle);
		    //print_r($json); 
		    
		    }
		    //print_r($json);
		    
		    $data = json_decode($json);
		    
		    //p_r($data);
		    
		    //die; 
		    
		    $i=0;
		     
            foreach ($data as $key => $cat)
            {
            	
            	//p_r($cat);die;
            	
            	echo "\n";
            	
            	if($cat->sku != NULL){
            	$this->dump("index value No ".$key);
                $obj = new \Pimcore\Model\DataObject\Products();
                
                $category = new \Pimcore\Model\DataObject\Category\Listing();
                        $category->setCondition('name = ?', $cat->category);
                        $category->setLimit(1);
                        foreach ($category as $cat2) {
                            //p_r($cat2);die;
                            $obj->setCategory($cat2);
                        }
                        
                $brand = new \Pimcore\Model\DataObject\Brand\Listing();
                        $brand->setCondition('name = ?', $cat->brand);
                        $brand->setLimit(1);
                        foreach ($brand as $cat2) {
                            //p_r($cat2);die;
                            $obj->setBrand($cat2);
                        }
                        
                /*       
                $mat = new \Pimcore\Model\DataObject\Material\Listing();
                        $mat->setCondition('name = ?', $cat->material);
                        $mat->setLimit(1);
                        foreach ($mat as $cat3) {
                            p_r($cat3);die;
                            $obj->setMaterial($cat3);
                        }
                        
                 */ 
                        
                $date = \Carbon\Carbon::parse($cat->mfg);
                $importdate = \Carbon\Carbon::parse($cat->importdate);
                
                $col = new \Pimcore\Model\DataObject\Data\RgbaColor();
                $col->setRgba($cat->color);
                
                $image = \Pimcore\Model\Asset\Image::getByPath("/Images/".$cat->image);
                //p_r($image->filename);die;
                
                //$category->setKey("type".$i);
                $obj->setKey(ucfirst($cat->modelname));
                $obj->setPublished(true);
                $obj->setParentId(4);
                $obj->setSku($cat->sku);
                $obj->setModelname($cat->modelname);
                $obj->setMaterial($cat->material);
                $obj->setMfg($date);
                $obj->setImportdate($importdate);
                $obj->setImage($image);
                $obj->setColor($col);
                $obj->setRating($cat->rating);
                $obj->setPrice($cat->price);
                $obj->setDiscount($cat->discount);
                //$obj->setUsb($cat->usb);
                if($cat->wifi == "true"){
                $obj->setWifi(true);
                }else{
                $obj->setWifi(false);
                }
                if($cat->bluetooth == "Yes"){
                $obj->setBluetooth(true);
                }else{
                $obj->setBluetooth(false);
                }
                //$obj->setWifi($cat->wifi);
                
                $obj->save();
                $this->dump("Data Saved");
                $i++;
                //break;
                
                $import = new \Pimcore\Model\DataObject\Importdata\Listing();
                $import->setCondition('class_name = ?', 'Products');
                //p_r($import);die;
                foreach ($import as $path) {
                	//p_r($path);die;
                	$path->setStatus(true);
                	$path->setLog("No of rows ".$i."  "."Products data imported Successfully No Error");
         		$path->save();
            	}
                
                }else{
                $this->dump("There is no value on Index ".$key);
                } 
                //break;
                //$this->dump($i);
            }
            //$this->dump($i);die;           
            //die;
            if($i>0) {
		
		/*
		$import = new \Pimcore\Model\DataObject\Importdata\Listing();
                $import->setCondition('class_name = ?', 'Products');
                //p_r($import);die;
                foreach ($import as $path) {
                	//p_r($path);die;
                	$path->setStatus(true);
                	$path->setLog("Products data imported Successfully No Error"."total row saved ".$i);
         		$path->save();
            	} */
            	
            	$mail = new \Pimcore\Mail();
		$mail->addTo('tamojit.saha30@gmail.com');
		$mail->setSubject('Products Status');
		$mail->setBodyText("New Products have been added");
		$mail->send();
		
		//p_r($material1);die;
		//$material1->save();
		echo "\n";
		$this->dump("Import Data Successfully");
		} else {
		$this->dump("Some Error");
		}
		   
       }
}




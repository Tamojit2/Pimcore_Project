<?php

namespace AppBundle\Command;

use Pimcore\Console\AbstractCommand;
use Pimcore\Model\DataObject\ClassDefinition\Data;
use Pimcore\Console\Dumper;
use Symfony\Component\Translation\Loader\CsvFileLoader;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface; 
use Pimcore\Model\DataObject\Products;
use Pimcore\Model\DataObject\Category;
use Pimcore\Model\DataObject\Brand;
use Pimcore\Model\DataObject\Material;
use Pimcore\Model\DataObject\AbstractObject;


class BrandCommand extends AbstractCommand
{
    protected function configure()
    {
        $this
            ->setName('brand:save')
            ->setDescription('add new brand');
            //$this->addOption('file', 'b', InputOption::VALUE_REQUIRED, 'abc');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
    
    
    
    		$brand = new \Pimcore\Model\DataObject\Importdata\Listing();
                $brand->setCondition('class_name = ?', 'Brand');
                $brand->setLimit(1);
                foreach ($brand as $path) {
                	
                	//p_r($path);die;
                	$file = $path->getFile();
                    	$file=(PIMCORE_PROJECT_ROOT . '/web/var/assets' .$file->getPath().$file->getFilename());
                	//p_r(PIMCORE_PROJECT_ROOT . '/web/var/assets' .$file->getPath().$file->getFilename());die;
                	//p_r($file);die;
         	
            	}
    
    		//$path = $input->getOptions()['file'];
    		//p_r($path);die;
    		//$abc = file_get_contents($path);
    		//p_r($file);die;
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
            	//p_r($data);die;
            	//$i=0;
            	//p_r($cat);die;
            	/*
            	if($cat->name != NULL){
            	$this->dump("index value ".$key);
            	p_r($cat);
            	
            	}
            	else{
            	$this->dump("Some Error");
            	} 
            	*/
            	echo "\n";
            	
            	if($cat->name != NULL){
            	$this->dump("index value ".$key);
                $category = new \Pimcore\Model\DataObject\Brand();
                //p_r($cat->name);
                //p_r($cat->description);die;
                $name= $cat->name;
                //p_r($name);die;
                //$category->setKey("type".$i);
                $category->setKey(ucfirst($name));
                $category->setPublished(true);
                $category->setParentId(2);
                $category->setName($name);
                $category->setDescription($cat->description);
                
                $category->save();
                $this->dump("Data Saved");
                $i++;
                //break;
                }
                else{
                $this->dump("There is no value ".$key);
                } 
                //break;
                
                //$category->save();
                //$this->dump($i);
            }
            
            
            //$this->dump($i);die;           
            //die;
            if($i>0) {
		//$category->save();
		//$material1 = new \Pimcore\Model\DataObject\Importdata();
		
		$material1 = new \Pimcore\Model\DataObject\Importdata\Listing();
                $material1->setCondition('class_name = ?', 'Brand');
                //p_r($material1);die;
                foreach ($material1 as $path) {
                	//p_r($path);die;
                	$path->setLog("Brand data imported Successfully");
         		$path->save();
            	}
		
		//p_r($material1);die;
		//$material1->save();
		$this->dump("Import Data Successfully");
		} else {
		$this->dump("Some Error");
		}
		   
       }
}




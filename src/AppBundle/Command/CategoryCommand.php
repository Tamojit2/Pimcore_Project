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
use Pimcore\Model\DataObject\Material;
use Pimcore\Model\DataObject\AbstractObject;


class CategoryCommand extends AbstractCommand
{
    protected function configure()
    {
        $this
            ->setName('category:save')
            ->setDescription('add new category');
            //$this->addOption('file', 'c', InputOption::VALUE_REQUIRED, 'abc');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
    
    
    
    		$material = new \Pimcore\Model\DataObject\Importdata\Listing();
                $material->setCondition('class_name = ?', 'Material');
                $material->setLimit(1);
                foreach ($material as $path) {
                	
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
		     
            foreach ($data as $cat)
            {
            	//p_r($data);die;
            	$i=1;
            	//p_r($cat);die;
            	if($cat){
                $category = new \Pimcore\Model\DataObject\Category();
                //p_r($cat->name);
                //p_r($cat->description);die;
                $name= $cat->name;
                //p_r($name);die;
                //$category->setKey("type".$i);
                $category->setKey(ucfirst($name));
                $category->setPublished(true);
                $category->setParentId(3);
                $category->setName($name);
                $category->setDescription($cat->description);
                $i++;
                break;
                } else{
                break;
                }
                //$category->save();
            }
            if($category) {
		$category->save();
		//$material1 = new \Pimcore\Model\DataObject\Importdata();
		$material1 = new \Pimcore\Model\DataObject\Importdata\Listing();
                $material1->setCondition('class_name = ?', 'Material');
                //p_r($material1);die;
                foreach ($material1 as $path) {
                	//p_r($path);die;
                	$path->setLog("data imported");
         		$path->save();
            	}
		
		//p_r($material1);die;
		//$material1->save();
		$this->dump("Data Saved");
		} else {
		$this->dump("Some Error");
		}
		   
       }
}




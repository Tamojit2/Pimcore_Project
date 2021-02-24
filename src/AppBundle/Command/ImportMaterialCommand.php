<?php

namespace AppBundle\Command;

use Pimcore\Console\AbstractCommand;
use Pimcore\Model\DataObject\ClassDefinition\Data;
use Pimcore\Console\Dumper;
use Pimcore\Model\Asset\MetaData\ClassDefinition\Data\Asset;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Pimcore\Model\DataObject\Importdata;
use Pimcore\Model\DataObject\Products;
use Pimcore\Model\DataObject\Category;
use Pimcore\Model\DataObject\Material;
use Pimcore\Model\DataObject\AbstractObject;


class ImportMaterialCommand extends AbstractCommand
{
    protected function configure()
    {
        $this
            ->setName('material:import')
            ->setDescription('add new material');
            
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
                    //$file2 = $file->getFilename();
                    //p_r($file2);die;
                    $json = file_get_contents($file);
            		$data = json_decode($json);
                    //p_r($data);die;
         	
            }
                foreach ($data as $cat)
                {
            	
                $material = new \Pimcore\Model\DataObject\Material();
                $material->setKey($cat->name);
                $material->setPublished(true);
                $material->setParentId(9);
                $material->setName($cat->name);
                $material->setDescription($cat->description);
                $material->save();
                
                }
           
            
            $this->dump('saved');
       }
}



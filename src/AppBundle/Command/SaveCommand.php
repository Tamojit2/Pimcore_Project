<?php

namespace AppBundle\Command;

use Pimcore;
use Pimcore\Console\AbstractCommand;
use Pimcore\Model\DataObject\ClassDefinition\Data;
use Pimcore\Console\Dumper;
use Pimcore\Model\Asset\MetaData\ClassDefinition\Data\Asset;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface; 
use Pimcore\Model\DataObject\Products;
use Pimcore\Model\DataObject\Category;
use Pimcore\Model\DataObject\Material;
use Pimcore\Model\DataObject\AbstractObject;


class SaveCommand extends AbstractCommand
{
    protected function configure()
    {
        $this
            ->setName('save:command')
            ->setDescription('Basic info');
            $this->addOption('file', 'p', InputOption::VALUE_REQUIRED, 'abc');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
    
    
    	$path = $input->getOptions()['file'];
            $json = file_get_contents($path);
			//p_r($json);die;
            $data = json_decode($json);
            //p_r($data);die;
            foreach ($data as $cat)
        {
        
    	//$category = new Category();
    	//$category = Category::getById(17);
    	$obj = new \Pimcore\Model\DataObject\Products();


    	$category = new \Pimcore\Model\DataObject\Category\Listing();
                $category->setCondition('name = ?', $cat->category);
                $category->setLimit(1);
                foreach ($category as $cat2) {
                	//p_r($cat2);die;
                	$obj->setCategory($cat2);
                }
                
	//$fabric->addConditionParam("brand = ?", 'ABC', "AND");
	//p_r($entry);die;
	
	$material = new Material();
	$material = Material::getById(14);
	
	$col = new \Pimcore\Model\DataObject\Data\RgbaColor();
	$col->setRgba($cat->color);
	
	$date = \Carbon\Carbon::parse($cat->date);
	//$dt->getStartDate($date);
	
//$image = \Pimcore\Model\Asset\Image::getByPath($cat->image);
//$image = \Pimcore\Model\Asset\Image::getByPath("/_default_upload_bucket/" . $prod->name . ".png");

//$obj->setImage($image);
    	    
    //$obj = new \Pimcore\Model\DataObject\Products();
	$obj->setKey('product 62');
	$obj->setParentId(11);
	$obj->setPublished(false);
	$obj->setFirstName($cat->name);
	$obj->setPrice($cat->price);
	$obj->setDiscount($cat->discount);
	$obj->setColor($col);
	$obj->setMfg($date);
/*$date=date_create("2020-03-09");
date_format($date,"Y-m-d);
$obj->setMfg($date); */
	$obj->setRating($cat->rating);
	$obj->setMaterial($material->getName());
	
	}
	
	
	if($obj) {
	$obj->save();
	$this->dump("Data Saved");
	} else {
	$this->dump("Some Error");
	}
	
	
    }
}

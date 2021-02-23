<?php 

namespace Pimcore\Model\DataObject\Products;

use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;

class Classification extends \Pimcore\Model\DataObject\Objectbrick {

protected $brickGetters = ['television','laptop'];


protected $television = null;

/**
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Television|null
*/
public function getTelevision() { 
   return $this->television; 
}

/**
* @param \Pimcore\Model\DataObject\Objectbrick\Data\Television $television
* @return \Pimcore\Model\DataObject\Products\Classification
*/
public function setTelevision ($television) {
	$this->television = $television;
	return $this;
}

protected $laptop = null;

/**
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Laptop|null
*/
public function getLaptop() { 
   return $this->laptop; 
}

/**
* @param \Pimcore\Model\DataObject\Objectbrick\Data\Laptop $laptop
* @return \Pimcore\Model\DataObject\Products\Classification
*/
public function setLaptop ($laptop) {
	$this->laptop = $laptop;
	return $this;
}

}


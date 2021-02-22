<?php 

namespace Pimcore\Model\DataObject\Products;

use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;

class Classification extends \Pimcore\Model\DataObject\Objectbrick {

protected $brickGetters = ['Laptop','Television'];


protected $Laptop = null;

/**
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Laptop|null
*/
public function getLaptop() { 
   return $this->Laptop; 
}

/**
* @param \Pimcore\Model\DataObject\Objectbrick\Data\Laptop $Laptop
* @return \Pimcore\Model\DataObject\Products\Classification
*/
public function setLaptop ($Laptop) {
	$this->Laptop = $Laptop;
	return $this;
}

protected $Television = null;

/**
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Television|null
*/
public function getTelevision() { 
   return $this->Television; 
}

/**
* @param \Pimcore\Model\DataObject\Objectbrick\Data\Television $Television
* @return \Pimcore\Model\DataObject\Products\Classification
*/
public function setTelevision ($Television) {
	$this->Television = $Television;
	return $this;
}

}


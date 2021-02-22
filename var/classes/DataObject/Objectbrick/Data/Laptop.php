<?php 

/** 
Fields Summary: 
- processor [input]
- ram [select]
*/ 

namespace Pimcore\Model\DataObject\Objectbrick\Data;

use Pimcore\Model\DataObject;
use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;


class Laptop extends DataObject\Objectbrick\Data\AbstractData {

protected $type = "Laptop";
protected $processor;
protected $ram;


/**
* Laptop constructor.
* @param DataObject\Concrete $object
*/
public function __construct(DataObject\Concrete $object) {
	parent::__construct($object);
	$this->markFieldDirty("_self");
}


/**
* Get processor - Processor
* @return string|null
*/
public function getProcessor () {
	$data = $this->processor;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("processor")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("processor");
		} catch (InheritanceParentNotFoundException $e) {
			// no data from parent available, continue ... 
		}
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}
	 return $data;
}

/**
* Set processor - Processor
* @param string|null $processor
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Laptop
*/
public function setProcessor ($processor) {
	$fd = $this->getDefinition()->getFieldDefinition("processor");
	$this->processor = $processor;
	return $this;
}

/**
* Get ram - Ram
* @return string|null
*/
public function getRam () {
	$data = $this->ram;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("ram")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("ram");
		} catch (InheritanceParentNotFoundException $e) {
			// no data from parent available, continue ... 
		}
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}
	 return $data;
}

/**
* Set ram - Ram
* @param string|null $ram
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Laptop
*/
public function setRam ($ram) {
	$fd = $this->getDefinition()->getFieldDefinition("ram");
	$this->ram = $ram;
	return $this;
}

}


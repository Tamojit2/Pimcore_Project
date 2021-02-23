<?php 

/** 
* Inheritance: no
* Variants: no


Fields Summary: 
- name [input]
- description [textarea]
*/ 

namespace Pimcore\Model\DataObject;

use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;

/**
* @method static \Pimcore\Model\DataObject\Brand\Listing|\Pimcore\Model\DataObject\Brand getByName ($value, $limit = 0, $offset = 0) 
* @method static \Pimcore\Model\DataObject\Brand\Listing|\Pimcore\Model\DataObject\Brand getByDescription ($value, $limit = 0, $offset = 0) 
*/

class Brand extends Concrete {

protected $o_classId = "2";
protected $o_className = "brand";
protected $name;
protected $description;


/**
* @param array $values
* @return \Pimcore\Model\DataObject\Brand
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get name - Name
* @return string|null
*/
public function getName () {
	if($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) { 
		$preValue = $this->preGetValue("name"); 
		if($preValue !== null) { 
			return $preValue;
		}
	} 

	$data = $this->name;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}

	return $data;
}

/**
* Set name - Name
* @param string|null $name
* @return \Pimcore\Model\DataObject\Brand
*/
public function setName ($name) {
	$fd = $this->getClass()->getFieldDefinition("name");
	$this->name = $name;
	return $this;
}

/**
* Get description - Description
* @return string|null
*/
public function getDescription () {
	if($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) { 
		$preValue = $this->preGetValue("description"); 
		if($preValue !== null) { 
			return $preValue;
		}
	} 

	$data = $this->description;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}

	return $data;
}

/**
* Set description - Description
* @param string|null $description
* @return \Pimcore\Model\DataObject\Brand
*/
public function setDescription ($description) {
	$fd = $this->getClass()->getFieldDefinition("description");
	$this->description = $description;
	return $this;
}

}


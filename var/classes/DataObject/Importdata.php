<?php 

/** 
* Inheritance: no
* Variants: no


Fields Summary: 
- class_name [select]
- file [manyToOneRelation]
- status [checkbox]
- log [textarea]
*/ 

namespace Pimcore\Model\DataObject;

use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;

/**
* @method static \Pimcore\Model\DataObject\Importdata\Listing|\Pimcore\Model\DataObject\Importdata getByClass_name ($value, $limit = 0, $offset = 0) 
* @method static \Pimcore\Model\DataObject\Importdata\Listing|\Pimcore\Model\DataObject\Importdata getByFile ($value, $limit = 0, $offset = 0) 
* @method static \Pimcore\Model\DataObject\Importdata\Listing|\Pimcore\Model\DataObject\Importdata getByStatus ($value, $limit = 0, $offset = 0) 
* @method static \Pimcore\Model\DataObject\Importdata\Listing|\Pimcore\Model\DataObject\Importdata getByLog ($value, $limit = 0, $offset = 0) 
*/

class Importdata extends Concrete {

protected $o_classId = "6";
protected $o_className = "importdata";
protected $class_name;
protected $file;
protected $status;
protected $log;


/**
* @param array $values
* @return \Pimcore\Model\DataObject\Importdata
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get class_name - ClassName
* @return string|null
*/
public function getClass_name () {
	if($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) { 
		$preValue = $this->preGetValue("class_name"); 
		if($preValue !== null) { 
			return $preValue;
		}
	} 

	$data = $this->class_name;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}

	return $data;
}

/**
* Set class_name - ClassName
* @param string|null $class_name
* @return \Pimcore\Model\DataObject\Importdata
*/
public function setClass_name ($class_name) {
	$fd = $this->getClass()->getFieldDefinition("class_name");
	$this->class_name = $class_name;
	return $this;
}

/**
* Get file - File
* @return \Pimcore\Model\Asset\Text|null
*/
public function getFile () {
	if($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) { 
		$preValue = $this->preGetValue("file"); 
		if($preValue !== null) { 
			return $preValue;
		}
	} 

	$data = $this->getClass()->getFieldDefinition("file")->preGetData($this);

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}

	return $data;
}

/**
* Set file - File
* @param \Pimcore\Model\Asset\Text $file
* @return \Pimcore\Model\DataObject\Importdata
*/
public function setFile ($file) {
	$fd = $this->getClass()->getFieldDefinition("file");
	$hideUnpublished = \Pimcore\Model\DataObject\Concrete::getHideUnpublished();
	\Pimcore\Model\DataObject\Concrete::setHideUnpublished(false);
	$currentData = $this->getFile();
	\Pimcore\Model\DataObject\Concrete::setHideUnpublished($hideUnpublished);
	$isEqual = $fd->isEqual($currentData, $file);
	if (!$isEqual) {
		$this->markFieldDirty("file", true);
	}
	$this->file = $fd->preSetData($this, $file);
	return $this;
}

/**
* Get status - Status
* @return bool|null
*/
public function getStatus () {
	if($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) { 
		$preValue = $this->preGetValue("status"); 
		if($preValue !== null) { 
			return $preValue;
		}
	} 

	$data = $this->status;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}

	return $data;
}

/**
* Set status - Status
* @param bool|null $status
* @return \Pimcore\Model\DataObject\Importdata
*/
public function setStatus ($status) {
	$fd = $this->getClass()->getFieldDefinition("status");
	$this->status = $status;
	return $this;
}

/**
* Get log - LogMessage
* @return string|null
*/
public function getLog () {
	if($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) { 
		$preValue = $this->preGetValue("log"); 
		if($preValue !== null) { 
			return $preValue;
		}
	} 

	$data = $this->log;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}

	return $data;
}

/**
* Set log - LogMessage
* @param string|null $log
* @return \Pimcore\Model\DataObject\Importdata
*/
public function setLog ($log) {
	$fd = $this->getClass()->getFieldDefinition("log");
	$this->log = $log;
	return $this;
}

}


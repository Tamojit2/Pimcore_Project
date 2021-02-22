<?php 

/** 
Fields Summary: 
- internet [input]
- remote [checkbox]
*/ 

namespace Pimcore\Model\DataObject\Objectbrick\Data;

use Pimcore\Model\DataObject;
use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;


class Television extends DataObject\Objectbrick\Data\AbstractData {

protected $type = "Television";
protected $internet;
protected $remote;


/**
* Television constructor.
* @param DataObject\Concrete $object
*/
public function __construct(DataObject\Concrete $object) {
	parent::__construct($object);
	$this->markFieldDirty("_self");
}


/**
* Get internet - InternetFeatures
* @return string|null
*/
public function getInternet () {
	$data = $this->internet;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("internet")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("internet");
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
* Set internet - InternetFeatures
* @param string|null $internet
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Television
*/
public function setInternet ($internet) {
	$fd = $this->getDefinition()->getFieldDefinition("internet");
	$this->internet = $internet;
	return $this;
}

/**
* Get remote - Remote
* @return bool|null
*/
public function getRemote () {
	$data = $this->remote;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("remote")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("remote");
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
* Set remote - Remote
* @param bool|null $remote
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Television
*/
public function setRemote ($remote) {
	$fd = $this->getDefinition()->getFieldDefinition("remote");
	$this->remote = $remote;
	return $this;
}

}


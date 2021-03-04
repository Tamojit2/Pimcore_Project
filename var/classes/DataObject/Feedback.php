<?php 

/** 
* Inheritance: no
* Variants: no


Fields Summary: 
- usermail [input]
- username [input]
- product [input]
- feedback [textarea]
*/ 

namespace Pimcore\Model\DataObject;

use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;

/**
* @method static \Pimcore\Model\DataObject\Feedback\Listing|\Pimcore\Model\DataObject\Feedback getByUsermail ($value, $limit = 0, $offset = 0) 
* @method static \Pimcore\Model\DataObject\Feedback\Listing|\Pimcore\Model\DataObject\Feedback getByUsername ($value, $limit = 0, $offset = 0) 
* @method static \Pimcore\Model\DataObject\Feedback\Listing|\Pimcore\Model\DataObject\Feedback getByProduct ($value, $limit = 0, $offset = 0) 
* @method static \Pimcore\Model\DataObject\Feedback\Listing|\Pimcore\Model\DataObject\Feedback getByFeedback ($value, $limit = 0, $offset = 0) 
*/

class Feedback extends Concrete {

protected $o_classId = "7";
protected $o_className = "feedback";
protected $usermail;
protected $username;
protected $product;
protected $feedback;


/**
* @param array $values
* @return \Pimcore\Model\DataObject\Feedback
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get usermail - UserMail
* @return string|null
*/
public function getUsermail () {
	if($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) { 
		$preValue = $this->preGetValue("usermail"); 
		if($preValue !== null) { 
			return $preValue;
		}
	} 

	$data = $this->usermail;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}

	return $data;
}

/**
* Set usermail - UserMail
* @param string|null $usermail
* @return \Pimcore\Model\DataObject\Feedback
*/
public function setUsermail ($usermail) {
	$fd = $this->getClass()->getFieldDefinition("usermail");
	$this->usermail = $usermail;
	return $this;
}

/**
* Get username - UserName
* @return string|null
*/
public function getUsername () {
	if($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) { 
		$preValue = $this->preGetValue("username"); 
		if($preValue !== null) { 
			return $preValue;
		}
	} 

	$data = $this->username;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}

	return $data;
}

/**
* Set username - UserName
* @param string|null $username
* @return \Pimcore\Model\DataObject\Feedback
*/
public function setUsername ($username) {
	$fd = $this->getClass()->getFieldDefinition("username");
	$this->username = $username;
	return $this;
}

/**
* Get product - Product
* @return string|null
*/
public function getProduct () {
	if($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) { 
		$preValue = $this->preGetValue("product"); 
		if($preValue !== null) { 
			return $preValue;
		}
	} 

	$data = $this->product;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}

	return $data;
}

/**
* Set product - Product
* @param string|null $product
* @return \Pimcore\Model\DataObject\Feedback
*/
public function setProduct ($product) {
	$fd = $this->getClass()->getFieldDefinition("product");
	$this->product = $product;
	return $this;
}

/**
* Get feedback - feedback
* @return string|null
*/
public function getFeedback () {
	if($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) { 
		$preValue = $this->preGetValue("feedback"); 
		if($preValue !== null) { 
			return $preValue;
		}
	} 

	$data = $this->feedback;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}

	return $data;
}

/**
* Set feedback - feedback
* @param string|null $feedback
* @return \Pimcore\Model\DataObject\Feedback
*/
public function setFeedback ($feedback) {
	$fd = $this->getClass()->getFieldDefinition("feedback");
	$this->feedback = $feedback;
	return $this;
}

}


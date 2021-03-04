<?php 

namespace Pimcore\Model\DataObject\Feedback;

use Pimcore\Model\DataObject;

/**
 * @method DataObject\Feedback current()
 * @method DataObject\Feedback[] load()
 */

class Listing extends DataObject\Listing\Concrete {

protected $classId = "7";
protected $className = "feedback";


/**
* Filter by usermail (UserMail)
* @param string|int|float|float|array $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByUsermail ($data, $operator = '=') {
	$this->getClass()->getFieldDefinition("usermail")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by username (UserName)
* @param string|int|float|float|array $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByUsername ($data, $operator = '=') {
	$this->getClass()->getFieldDefinition("username")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by product (Product)
* @param string|int|float|float|array $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByProduct ($data, $operator = '=') {
	$this->getClass()->getFieldDefinition("product")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by feedback (feedback)
* @param string|int|float|float|array $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByFeedback ($data, $operator = '=') {
	$this->getClass()->getFieldDefinition("feedback")->addListingFilter($this, $data, $operator);
	return $this;
}



}

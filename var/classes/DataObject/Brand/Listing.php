<?php 

namespace Pimcore\Model\DataObject\Brand;

use Pimcore\Model\DataObject;

/**
 * @method DataObject\Brand current()
 * @method DataObject\Brand[] load()
 */

class Listing extends DataObject\Listing\Concrete {

protected $classId = "2";
protected $className = "brand";


/**
* Filter by name (Name)
* @param string|int|float|float|array $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByName ($data, $operator = '=') {
	$this->getClass()->getFieldDefinition("name")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by description (Description)
* @param string|int|float|float|array $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByDescription ($data, $operator = '=') {
	$this->getClass()->getFieldDefinition("description")->addListingFilter($this, $data, $operator);
	return $this;
}



}

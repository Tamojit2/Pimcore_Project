<?php 

namespace Pimcore\Model\DataObject\Importdata;

use Pimcore\Model\DataObject;

/**
 * @method DataObject\Importdata current()
 * @method DataObject\Importdata[] load()
 */

class Listing extends DataObject\Listing\Concrete {

protected $classId = "6";
protected $className = "importdata";


/**
* Filter by class_name (ClassName)
* @param string|int|float|float|array $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByClass_name ($data, $operator = '=') {
	$this->getClass()->getFieldDefinition("class_name")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by file (File)
* @param Element\ElementInterface|array $data   comparison element or ['id' => <element ID>, 'type' => <element type>]
* @param string $operator  SQL comparison operator, currently only "=" possible
* @return static
*/
public function filterByFile ($data, $operator = '=') {
	$this->getClass()->getFieldDefinition("file")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by log (LogMessage)
* @param string|int|float|float|array $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByLog ($data, $operator = '=') {
	$this->getClass()->getFieldDefinition("log")->addListingFilter($this, $data, $operator);
	return $this;
}



}

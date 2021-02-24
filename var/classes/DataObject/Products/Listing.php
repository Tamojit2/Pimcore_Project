<?php 

namespace Pimcore\Model\DataObject\Products;

use Pimcore\Model\DataObject;

/**
 * @method DataObject\Products current()
 * @method DataObject\Products[] load()
 */

class Listing extends DataObject\Listing\Concrete {

protected $classId = "3";
protected $className = "products";


/**
* Filter by sku (SKU)
* @param string|int|float|float|array $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterBySku ($data, $operator = '=') {
	$this->getClass()->getFieldDefinition("sku")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by modelname (ModelName)
* @param string|int|float|float|array $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByModelname ($data, $operator = '=') {
	$this->getClass()->getFieldDefinition("modelname")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by brand (Brand)
* @param Element\ElementInterface|array $data   comparison element or ['id' => <element ID>, 'type' => <element type>]
* @param string $operator  SQL comparison operator, currently only "=" possible
* @return static
*/
public function filterByBrand ($data, $operator = '=') {
	$this->getClass()->getFieldDefinition("brand")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by category (Category)
* @param Element\ElementInterface|array $data   comparison element or ['id' => <element ID>, 'type' => <element type>]
* @param string $operator  SQL comparison operator, currently only "=" possible
* @return static
*/
public function filterByCategory ($data, $operator = '=') {
	$this->getClass()->getFieldDefinition("category")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by mfg (ManufactureAt)
* @param string|int|float|float|array $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByMfg ($data, $operator = '=') {
	$this->getClass()->getFieldDefinition("mfg")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by importdate (ImportDate)
* @param string|int|float|float|array $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByImportdate ($data, $operator = '=') {
	$this->getClass()->getFieldDefinition("importdate")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by material (Material)
* @param string|int|float|float|array $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByMaterial ($data, $operator = '=') {
	$this->getClass()->getFieldDefinition("material")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by image (image)
* @param string|int|float|float|array $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByImage ($data, $operator = '=') {
	$this->getClass()->getFieldDefinition("image")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by rating (Rating)
* @param string|int|float|float|array $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByRating ($data, $operator = '=') {
	$this->getClass()->getFieldDefinition("rating")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by price (Price)
* @param string|int|float|float|array $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByPrice ($data, $operator = '=') {
	$this->getClass()->getFieldDefinition("price")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by discount (Discount)
* @param string|int|float|float|array $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByDiscount ($data, $operator = '=') {
	$this->getClass()->getFieldDefinition("discount")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by usb (Usb)
* @param string|int|float|float|array $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByUsb ($data, $operator = '=') {
	$this->getClass()->getFieldDefinition("usb")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by wifi (WiFi)
* @param string|int|float|float|array $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByWifi ($data, $operator = '=') {
	$this->getClass()->getFieldDefinition("wifi")->addListingFilter($this, $data, $operator);
	return $this;
}



}

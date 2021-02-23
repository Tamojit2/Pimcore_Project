<?php 

/** 
* Inheritance: no
* Variants: no


Fields Summary: 
- sku [input]
- modelName [input]
- brand [manyToOneRelation]
- category [manyToOneRelation]
- mfg [date]
- importDate [date]
- image [image]
- classification [objectbricks]
- rating [select]
- price [numeric]
- discount [numeric]
- usb [multiselect]
- color [rgbaColor]
- wifi [checkbox]
- bluetooth [booleanSelect]
- material [manyToOneRelation]
- operatingSystem [manyToOneRelation]
*/ 

namespace Pimcore\Model\DataObject;

use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;

/**
* @method static \Pimcore\Model\DataObject\Products\Listing|\Pimcore\Model\DataObject\Products getBySku ($value, $limit = 0, $offset = 0) 
* @method static \Pimcore\Model\DataObject\Products\Listing|\Pimcore\Model\DataObject\Products getByModelName ($value, $limit = 0, $offset = 0) 
* @method static \Pimcore\Model\DataObject\Products\Listing|\Pimcore\Model\DataObject\Products getByBrand ($value, $limit = 0, $offset = 0) 
* @method static \Pimcore\Model\DataObject\Products\Listing|\Pimcore\Model\DataObject\Products getByCategory ($value, $limit = 0, $offset = 0) 
* @method static \Pimcore\Model\DataObject\Products\Listing|\Pimcore\Model\DataObject\Products getByMfg ($value, $limit = 0, $offset = 0) 
* @method static \Pimcore\Model\DataObject\Products\Listing|\Pimcore\Model\DataObject\Products getByImportDate ($value, $limit = 0, $offset = 0) 
* @method static \Pimcore\Model\DataObject\Products\Listing|\Pimcore\Model\DataObject\Products getByImage ($value, $limit = 0, $offset = 0) 
* @method static \Pimcore\Model\DataObject\Products\Listing|\Pimcore\Model\DataObject\Products getByRating ($value, $limit = 0, $offset = 0) 
* @method static \Pimcore\Model\DataObject\Products\Listing|\Pimcore\Model\DataObject\Products getByPrice ($value, $limit = 0, $offset = 0) 
* @method static \Pimcore\Model\DataObject\Products\Listing|\Pimcore\Model\DataObject\Products getByDiscount ($value, $limit = 0, $offset = 0) 
* @method static \Pimcore\Model\DataObject\Products\Listing|\Pimcore\Model\DataObject\Products getByUsb ($value, $limit = 0, $offset = 0) 
* @method static \Pimcore\Model\DataObject\Products\Listing|\Pimcore\Model\DataObject\Products getByWifi ($value, $limit = 0, $offset = 0) 
* @method static \Pimcore\Model\DataObject\Products\Listing|\Pimcore\Model\DataObject\Products getByMaterial ($value, $limit = 0, $offset = 0) 
* @method static \Pimcore\Model\DataObject\Products\Listing|\Pimcore\Model\DataObject\Products getByOperatingSystem ($value, $limit = 0, $offset = 0) 
*/

class Products extends Concrete {

protected $o_classId = "3";
protected $o_className = "products";
protected $sku;
protected $modelName;
protected $brand;
protected $category;
protected $mfg;
protected $importDate;
protected $image;
protected $classification;
protected $rating;
protected $price;
protected $discount;
protected $usb;
protected $color;
protected $wifi;
protected $bluetooth;
protected $material;
protected $operatingSystem;


/**
* @param array $values
* @return \Pimcore\Model\DataObject\Products
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get sku - Sku
* @return string|null
*/
public function getSku () {
	if($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) { 
		$preValue = $this->preGetValue("sku"); 
		if($preValue !== null) { 
			return $preValue;
		}
	} 

	$data = $this->sku;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}

	return $data;
}

/**
* Set sku - Sku
* @param string|null $sku
* @return \Pimcore\Model\DataObject\Products
*/
public function setSku ($sku) {
	$fd = $this->getClass()->getFieldDefinition("sku");
	$this->sku = $sku;
	return $this;
}

/**
* Get modelName - ModelName
* @return string|null
*/
public function getModelName () {
	if($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) { 
		$preValue = $this->preGetValue("modelName"); 
		if($preValue !== null) { 
			return $preValue;
		}
	} 

	$data = $this->modelName;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}

	return $data;
}

/**
* Set modelName - ModelName
* @param string|null $modelName
* @return \Pimcore\Model\DataObject\Products
*/
public function setModelName ($modelName) {
	$fd = $this->getClass()->getFieldDefinition("modelName");
	$this->modelName = $modelName;
	return $this;
}

/**
* Get brand - Brand
* @return \Pimcore\Model\DataObject\Brand|null
*/
public function getBrand () {
	if($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) { 
		$preValue = $this->preGetValue("brand"); 
		if($preValue !== null) { 
			return $preValue;
		}
	} 

	$data = $this->getClass()->getFieldDefinition("brand")->preGetData($this);

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}

	return $data;
}

/**
* Set brand - Brand
* @param \Pimcore\Model\DataObject\Brand $brand
* @return \Pimcore\Model\DataObject\Products
*/
public function setBrand ($brand) {
	$fd = $this->getClass()->getFieldDefinition("brand");
	$hideUnpublished = \Pimcore\Model\DataObject\Concrete::getHideUnpublished();
	\Pimcore\Model\DataObject\Concrete::setHideUnpublished(false);
	$currentData = $this->getBrand();
	\Pimcore\Model\DataObject\Concrete::setHideUnpublished($hideUnpublished);
	$isEqual = $fd->isEqual($currentData, $brand);
	if (!$isEqual) {
		$this->markFieldDirty("brand", true);
	}
	$this->brand = $fd->preSetData($this, $brand);
	return $this;
}

/**
* Get category - Category
* @return \Pimcore\Model\DataObject\Category|null
*/
public function getCategory () {
	if($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) { 
		$preValue = $this->preGetValue("category"); 
		if($preValue !== null) { 
			return $preValue;
		}
	} 

	$data = $this->getClass()->getFieldDefinition("category")->preGetData($this);

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}

	return $data;
}

/**
* Set category - Category
* @param \Pimcore\Model\DataObject\Category $category
* @return \Pimcore\Model\DataObject\Products
*/
public function setCategory ($category) {
	$fd = $this->getClass()->getFieldDefinition("category");
	$hideUnpublished = \Pimcore\Model\DataObject\Concrete::getHideUnpublished();
	\Pimcore\Model\DataObject\Concrete::setHideUnpublished(false);
	$currentData = $this->getCategory();
	\Pimcore\Model\DataObject\Concrete::setHideUnpublished($hideUnpublished);
	$isEqual = $fd->isEqual($currentData, $category);
	if (!$isEqual) {
		$this->markFieldDirty("category", true);
	}
	$this->category = $fd->preSetData($this, $category);
	return $this;
}

/**
* Get mfg - ManufacturingDate
* @return \Carbon\Carbon|null
*/
public function getMfg () {
	if($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) { 
		$preValue = $this->preGetValue("mfg"); 
		if($preValue !== null) { 
			return $preValue;
		}
	} 

	$data = $this->mfg;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}

	return $data;
}

/**
* Set mfg - ManufacturingDate
* @param \Carbon\Carbon|null $mfg
* @return \Pimcore\Model\DataObject\Products
*/
public function setMfg ($mfg) {
	$fd = $this->getClass()->getFieldDefinition("mfg");
	$this->mfg = $mfg;
	return $this;
}

/**
* Get importDate - ImportDate
* @return \Carbon\Carbon|null
*/
public function getImportDate () {
	if($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) { 
		$preValue = $this->preGetValue("importDate"); 
		if($preValue !== null) { 
			return $preValue;
		}
	} 

	$data = $this->importDate;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}

	return $data;
}

/**
* Set importDate - ImportDate
* @param \Carbon\Carbon|null $importDate
* @return \Pimcore\Model\DataObject\Products
*/
public function setImportDate ($importDate) {
	$fd = $this->getClass()->getFieldDefinition("importDate");
	$this->importDate = $importDate;
	return $this;
}

/**
* Get image - Image
* @return \Pimcore\Model\Asset\Image|null
*/
public function getImage () {
	if($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) { 
		$preValue = $this->preGetValue("image"); 
		if($preValue !== null) { 
			return $preValue;
		}
	} 

	$data = $this->image;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}

	return $data;
}

/**
* Set image - Image
* @param \Pimcore\Model\Asset\Image|null $image
* @return \Pimcore\Model\DataObject\Products
*/
public function setImage ($image) {
	$fd = $this->getClass()->getFieldDefinition("image");
	$this->image = $image;
	return $this;
}

/**
* @return \Pimcore\Model\DataObject\Products\Classification
*/
public function getClassification () {
	$data = $this->classification;
	if(!$data) { 
		if(\Pimcore\Tool::classExists("\\Pimcore\\Model\\DataObject\\Products\\Classification")) { 
			$data = new \Pimcore\Model\DataObject\Products\Classification($this, "classification");
			$this->classification = $data;
		} else {
			return null;
		}
	}
	if($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) { 
		$preValue = $this->preGetValue("classification"); 
		if($preValue !== null) { 
			return $preValue;
		}
	} 

	 return $data;
}

/**
* Set classification - Classification
* @param \Pimcore\Model\DataObject\Objectbrick $classification
* @return \Pimcore\Model\DataObject\Products
*/
public function setClassification ($classification) {
	$fd = $this->getClass()->getFieldDefinition("classification");
	$this->classification = $fd->preSetData($this, $classification);
	return $this;
}

/**
* Get rating - rating
* @return string|null
*/
public function getRating () {
	if($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) { 
		$preValue = $this->preGetValue("rating"); 
		if($preValue !== null) { 
			return $preValue;
		}
	} 

	$data = $this->rating;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}

	return $data;
}

/**
* Set rating - rating
* @param string|null $rating
* @return \Pimcore\Model\DataObject\Products
*/
public function setRating ($rating) {
	$fd = $this->getClass()->getFieldDefinition("rating");
	$this->rating = $rating;
	return $this;
}

/**
* Get price - Price
* @return float|null
*/
public function getPrice () {
	if($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) { 
		$preValue = $this->preGetValue("price"); 
		if($preValue !== null) { 
			return $preValue;
		}
	} 

	$data = $this->price;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}

	return $data;
}

/**
* Set price - Price
* @param float|null $price
* @return \Pimcore\Model\DataObject\Products
*/
public function setPrice ($price) {
	$fd = $this->getClass()->getFieldDefinition("price");
	$this->price = $fd->preSetData($this, $price);
	return $this;
}

/**
* Get discount - Discount
* @return float|null
*/
public function getDiscount () {
	if($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) { 
		$preValue = $this->preGetValue("discount"); 
		if($preValue !== null) { 
			return $preValue;
		}
	} 

	$data = $this->discount;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}

	return $data;
}

/**
* Set discount - Discount
* @param float|null $discount
* @return \Pimcore\Model\DataObject\Products
*/
public function setDiscount ($discount) {
	$fd = $this->getClass()->getFieldDefinition("discount");
	$this->discount = $fd->preSetData($this, $discount);
	return $this;
}

/**
* Get usb - Usb
* @return array|null
*/
public function getUsb () {
	if($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) { 
		$preValue = $this->preGetValue("usb"); 
		if($preValue !== null) { 
			return $preValue;
		}
	} 

	$data = $this->usb;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}

	return $data;
}

/**
* Set usb - Usb
* @param array|null $usb
* @return \Pimcore\Model\DataObject\Products
*/
public function setUsb ($usb) {
	$fd = $this->getClass()->getFieldDefinition("usb");
	$this->usb = $usb;
	return $this;
}

/**
* Get color - Color
* @return \Pimcore\Model\DataObject\Data\RgbaColor|null
*/
public function getColor () {
	if($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) { 
		$preValue = $this->preGetValue("color"); 
		if($preValue !== null) { 
			return $preValue;
		}
	} 

	$data = $this->color;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}

	return $data;
}

/**
* Set color - Color
* @param \Pimcore\Model\DataObject\Data\RgbaColor|null $color
* @return \Pimcore\Model\DataObject\Products
*/
public function setColor ($color) {
	$fd = $this->getClass()->getFieldDefinition("color");
	$this->color = $color;
	return $this;
}

/**
* Get wifi - WiFi
* @return bool|null
*/
public function getWifi () {
	if($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) { 
		$preValue = $this->preGetValue("wifi"); 
		if($preValue !== null) { 
			return $preValue;
		}
	} 

	$data = $this->wifi;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}

	return $data;
}

/**
* Set wifi - WiFi
* @param bool|null $wifi
* @return \Pimcore\Model\DataObject\Products
*/
public function setWifi ($wifi) {
	$fd = $this->getClass()->getFieldDefinition("wifi");
	$this->wifi = $wifi;
	return $this;
}

/**
* Get bluetooth - Bluetooth
* @return bool|null
*/
public function getBluetooth () {
	if($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) { 
		$preValue = $this->preGetValue("bluetooth"); 
		if($preValue !== null) { 
			return $preValue;
		}
	} 

	$data = $this->bluetooth;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}

	return $data;
}

/**
* Set bluetooth - Bluetooth
* @param bool|null $bluetooth
* @return \Pimcore\Model\DataObject\Products
*/
public function setBluetooth ($bluetooth) {
	$fd = $this->getClass()->getFieldDefinition("bluetooth");
	$this->bluetooth = $bluetooth;
	return $this;
}

/**
* Get material - Material
* @return \Pimcore\Model\DataObject\Material|null
*/
public function getMaterial () {
	if($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) { 
		$preValue = $this->preGetValue("material"); 
		if($preValue !== null) { 
			return $preValue;
		}
	} 

	$data = $this->getClass()->getFieldDefinition("material")->preGetData($this);

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}

	return $data;
}

/**
* Set material - Material
* @param \Pimcore\Model\DataObject\Material $material
* @return \Pimcore\Model\DataObject\Products
*/
public function setMaterial ($material) {
	$fd = $this->getClass()->getFieldDefinition("material");
	$hideUnpublished = \Pimcore\Model\DataObject\Concrete::getHideUnpublished();
	\Pimcore\Model\DataObject\Concrete::setHideUnpublished(false);
	$currentData = $this->getMaterial();
	\Pimcore\Model\DataObject\Concrete::setHideUnpublished($hideUnpublished);
	$isEqual = $fd->isEqual($currentData, $material);
	if (!$isEqual) {
		$this->markFieldDirty("material", true);
	}
	$this->material = $fd->preSetData($this, $material);
	return $this;
}

/**
* Get operatingSystem - OperatingSystem
* @return \Pimcore\Model\DataObject\Material|null
*/
public function getOperatingSystem () {
	if($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) { 
		$preValue = $this->preGetValue("operatingSystem"); 
		if($preValue !== null) { 
			return $preValue;
		}
	} 

	$data = $this->getClass()->getFieldDefinition("operatingSystem")->preGetData($this);

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}

	return $data;
}

/**
* Set operatingSystem - OperatingSystem
* @param \Pimcore\Model\DataObject\Material $operatingSystem
* @return \Pimcore\Model\DataObject\Products
*/
public function setOperatingSystem ($operatingSystem) {
	$fd = $this->getClass()->getFieldDefinition("operatingSystem");
	$hideUnpublished = \Pimcore\Model\DataObject\Concrete::getHideUnpublished();
	\Pimcore\Model\DataObject\Concrete::setHideUnpublished(false);
	$currentData = $this->getOperatingSystem();
	\Pimcore\Model\DataObject\Concrete::setHideUnpublished($hideUnpublished);
	$isEqual = $fd->isEqual($currentData, $operatingSystem);
	if (!$isEqual) {
		$this->markFieldDirty("operatingSystem", true);
	}
	$this->operatingSystem = $fd->preSetData($this, $operatingSystem);
	return $this;
}

}


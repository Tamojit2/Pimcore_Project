<?php 

/** 
* Inheritance: no
* Variants: no


Fields Summary: 
- sku [input]
- modelname [input]
- brand [manyToOneRelation]
- category [manyToOneRelation]
- mfg [date]
- importdate [date]
- image [image]
- classification [objectbricks]
- rating [select]
- price [numeric]
- discount [numeric]
- usb [multiselect]
- color [rgbaColor]
- wifi [checkbox]
- bluetooth [booleanSelect]
*/ 


return Pimcore\Model\DataObject\ClassDefinition::__set_state(array(
   'id' => '3',
   'name' => 'products',
   'description' => '',
   'creationDate' => 0,
   'modificationDate' => 1614007097,
   'userOwner' => 2,
   'userModification' => 2,
   'parentClass' => '',
   'implementsInterfaces' => '',
   'listingParentClass' => '',
   'useTraits' => '',
   'listingUseTraits' => '',
   'encryption' => false,
   'encryptedTables' => 
  array (
  ),
   'allowInherit' => false,
   'allowVariants' => NULL,
   'showVariants' => false,
   'layoutDefinitions' => 
  Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
     'fieldtype' => 'panel',
     'labelWidth' => 100,
     'layout' => NULL,
     'border' => false,
     'name' => 'pimcore_root',
     'type' => NULL,
     'region' => NULL,
     'title' => NULL,
     'width' => NULL,
     'height' => NULL,
     'collapsible' => false,
     'collapsed' => false,
     'bodyStyle' => NULL,
     'datatype' => 'layout',
     'permissions' => NULL,
     'childs' => 
    array (
      0 => 
      Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
         'fieldtype' => 'panel',
         'labelWidth' => 100,
         'layout' => NULL,
         'border' => false,
         'name' => 'Layout',
         'type' => NULL,
         'region' => NULL,
         'title' => '',
         'width' => NULL,
         'height' => NULL,
         'collapsible' => false,
         'collapsed' => false,
         'bodyStyle' => '',
         'datatype' => 'layout',
         'permissions' => NULL,
         'childs' => 
        array (
          0 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
             'fieldtype' => 'input',
             'width' => NULL,
             'defaultValue' => NULL,
             'queryColumnType' => 'varchar',
             'columnType' => 'varchar',
             'columnLength' => 190,
             'phpdocType' => 'string',
             'regex' => '',
             'unique' => false,
             'showCharCount' => false,
             'name' => 'sku',
             'title' => 'SKU',
             'tooltip' => '',
             'mandatory' => true,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
             'defaultValueGenerator' => '',
          )),
          1 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
             'fieldtype' => 'input',
             'width' => NULL,
             'defaultValue' => NULL,
             'queryColumnType' => 'varchar',
             'columnType' => 'varchar',
             'columnLength' => 190,
             'phpdocType' => 'string',
             'regex' => '',
             'unique' => false,
             'showCharCount' => false,
             'name' => 'modelname',
             'title' => 'ModelName',
             'tooltip' => '',
             'mandatory' => true,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
             'defaultValueGenerator' => '',
          )),
          2 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\ManyToOneRelation::__set_state(array(
             'fieldtype' => 'manyToOneRelation',
             'width' => '',
             'assetUploadPath' => '',
             'relationType' => true,
             'queryColumnType' => 
            array (
              'id' => 'int(11)',
              'type' => 'enum(\'document\',\'asset\',\'object\')',
            ),
             'phpdocType' => '\\Pimcore\\Model\\Document\\Page | \\Pimcore\\Model\\Document\\Snippet | \\Pimcore\\Model\\Document | \\Pimcore\\Model\\Asset | \\Pimcore\\Model\\DataObject\\AbstractObject',
             'objectsAllowed' => true,
             'assetsAllowed' => false,
             'assetTypes' => 
            array (
            ),
             'documentsAllowed' => false,
             'documentTypes' => 
            array (
            ),
             'classes' => 
            array (
              0 => 
              array (
                'classes' => 'brand',
              ),
            ),
             'pathFormatterClass' => '',
             'name' => 'brand',
             'title' => 'Brand',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
          )),
          3 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\ManyToOneRelation::__set_state(array(
             'fieldtype' => 'manyToOneRelation',
             'width' => '',
             'assetUploadPath' => '',
             'relationType' => true,
             'queryColumnType' => 
            array (
              'id' => 'int(11)',
              'type' => 'enum(\'document\',\'asset\',\'object\')',
            ),
             'phpdocType' => '\\Pimcore\\Model\\Document\\Page | \\Pimcore\\Model\\Document\\Snippet | \\Pimcore\\Model\\Document | \\Pimcore\\Model\\Asset | \\Pimcore\\Model\\DataObject\\AbstractObject',
             'objectsAllowed' => true,
             'assetsAllowed' => false,
             'assetTypes' => 
            array (
            ),
             'documentsAllowed' => false,
             'documentTypes' => 
            array (
            ),
             'classes' => 
            array (
              0 => 
              array (
                'classes' => 'category',
              ),
            ),
             'pathFormatterClass' => '',
             'name' => 'category',
             'title' => 'Category',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
          )),
          4 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\Date::__set_state(array(
             'fieldtype' => 'date',
             'queryColumnType' => 'bigint(20)',
             'columnType' => 'bigint(20)',
             'phpdocType' => '\\Carbon\\Carbon',
             'defaultValue' => NULL,
             'useCurrentDate' => false,
             'name' => 'mfg',
             'title' => 'ManufactureAt',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
             'defaultValueGenerator' => '',
          )),
          5 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\Date::__set_state(array(
             'fieldtype' => 'date',
             'queryColumnType' => 'bigint(20)',
             'columnType' => 'bigint(20)',
             'phpdocType' => '\\Carbon\\Carbon',
             'defaultValue' => NULL,
             'useCurrentDate' => false,
             'name' => 'importdate',
             'title' => 'ImportDate',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
             'defaultValueGenerator' => '',
          )),
          6 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\Image::__set_state(array(
             'fieldtype' => 'image',
             'width' => '',
             'height' => '',
             'uploadPath' => '',
             'queryColumnType' => 'int(11)',
             'columnType' => 'int(11)',
             'phpdocType' => '\\Pimcore\\Model\\Asset\\Image',
             'name' => 'image',
             'title' => 'image',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
          )),
          7 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\Objectbricks::__set_state(array(
             'fieldtype' => 'objectbricks',
             'phpdocType' => '\\Pimcore\\Model\\DataObject\\Objectbrick',
             'allowedTypes' => 
            array (
              0 => 'Laptop',
              1 => 'Television',
            ),
             'maxItems' => 2,
             'border' => false,
             'name' => 'classification',
             'title' => 'classification',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
          )),
          8 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\Select::__set_state(array(
             'fieldtype' => 'select',
             'options' => 
            array (
              0 => 
              array (
                'key' => '2 Star',
                'value' => '2 Star',
              ),
              1 => 
              array (
                'key' => '3 Star',
                'value' => '3 Star',
              ),
              2 => 
              array (
                'key' => '4 Star',
                'value' => '4 Star',
              ),
              3 => 
              array (
                'key' => '5 Star',
                'value' => '5 Star',
              ),
            ),
             'width' => '',
             'defaultValue' => '',
             'optionsProviderClass' => '',
             'optionsProviderData' => '',
             'queryColumnType' => 'varchar',
             'columnType' => 'varchar',
             'columnLength' => 190,
             'phpdocType' => 'string',
             'dynamicOptions' => false,
             'name' => 'rating',
             'title' => 'Rating',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
             'defaultValueGenerator' => '',
          )),
          9 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\Numeric::__set_state(array(
             'fieldtype' => 'numeric',
             'width' => '',
             'defaultValue' => NULL,
             'queryColumnType' => 'double',
             'columnType' => 'double',
             'phpdocType' => 'float',
             'integer' => false,
             'unsigned' => false,
             'minValue' => 1900,
             'maxValue' => NULL,
             'unique' => false,
             'decimalSize' => NULL,
             'decimalPrecision' => 2,
             'name' => 'price',
             'title' => 'Price',
             'tooltip' => '',
             'mandatory' => true,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
             'defaultValueGenerator' => '',
          )),
          10 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\Numeric::__set_state(array(
             'fieldtype' => 'numeric',
             'width' => '',
             'defaultValue' => NULL,
             'queryColumnType' => 'double',
             'columnType' => 'double',
             'phpdocType' => 'float',
             'integer' => true,
             'unsigned' => false,
             'minValue' => NULL,
             'maxValue' => 850,
             'unique' => false,
             'decimalSize' => NULL,
             'decimalPrecision' => NULL,
             'name' => 'discount',
             'title' => 'Discount',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
             'defaultValueGenerator' => '',
          )),
          11 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\Multiselect::__set_state(array(
             'fieldtype' => 'multiselect',
             'options' => 
            array (
              0 => 
              array (
                'key' => '3.2',
                'value' => '3.2',
              ),
              1 => 
              array (
                'key' => '3.1',
                'value' => '3.1',
              ),
              2 => 
              array (
                'key' => '3.0',
                'value' => '3.0',
              ),
              3 => 
              array (
                'key' => '2.1',
                'value' => '2.1',
              ),
              4 => 
              array (
                'key' => '2.0',
                'value' => '2.0',
              ),
            ),
             'width' => '',
             'height' => '',
             'maxItems' => '',
             'renderType' => 'list',
             'optionsProviderClass' => '',
             'optionsProviderData' => '',
             'queryColumnType' => 'text',
             'columnType' => 'text',
             'phpdocType' => 'array',
             'dynamicOptions' => false,
             'name' => 'usb',
             'title' => 'Usb',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
          )),
          12 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\RgbaColor::__set_state(array(
             'fieldtype' => 'rgbaColor',
             'width' => NULL,
             'queryColumnType' => 
            array (
              'rgb' => 'VARCHAR(6) NULL DEFAULT NULL',
              'a' => 'VARCHAR(2) NULL DEFAULT NULL',
            ),
             'columnType' => 
            array (
              'rgb' => 'VARCHAR(6) NULL DEFAULT NULL',
              'a' => 'VARCHAR(2) NULL DEFAULT NULL',
            ),
             'phpdocType' => '\\Pimcore\\Model\\DataObject\\Data\\RgbaColor',
             'name' => 'color',
             'title' => 'color',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
          )),
          13 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\Checkbox::__set_state(array(
             'fieldtype' => 'checkbox',
             'defaultValue' => NULL,
             'queryColumnType' => 'tinyint(1)',
             'columnType' => 'tinyint(1)',
             'phpdocType' => 'bool',
             'name' => 'wifi',
             'title' => 'WiFi',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
             'defaultValueGenerator' => '',
          )),
          14 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\BooleanSelect::__set_state(array(
             'fieldtype' => 'booleanSelect',
             'yesLabel' => 'yes',
             'noLabel' => 'no',
             'emptyLabel' => 'empty',
             'options' => 
            array (
              0 => 
              array (
                'key' => 'empty',
                'value' => 0,
              ),
              1 => 
              array (
                'key' => 'yes',
                'value' => 1,
              ),
              2 => 
              array (
                'key' => 'no',
                'value' => -1,
              ),
            ),
             'width' => '',
             'queryColumnType' => 'tinyint(1) null',
             'columnType' => 'tinyint(1) null',
             'phpdocType' => 'bool',
             'name' => 'bluetooth',
             'title' => 'Bluetooth',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
          )),
        ),
         'locked' => false,
         'icon' => '',
      )),
    ),
     'locked' => false,
     'icon' => NULL,
  )),
   'icon' => '',
   'previewUrl' => '',
   'group' => '',
   'showAppLoggerTab' => false,
   'linkGeneratorReference' => '',
   'compositeIndices' => 
  array (
  ),
   'generateTypeDeclarations' => false,
   'showFieldLookup' => false,
   'propertyVisibility' => 
  array (
    'grid' => 
    array (
      'id' => true,
      'key' => false,
      'path' => true,
      'published' => true,
      'modificationDate' => true,
      'creationDate' => true,
    ),
    'search' => 
    array (
      'id' => true,
      'key' => false,
      'path' => true,
      'published' => true,
      'modificationDate' => true,
      'creationDate' => true,
    ),
  ),
   'enableGridLocking' => false,
   'dao' => NULL,
));

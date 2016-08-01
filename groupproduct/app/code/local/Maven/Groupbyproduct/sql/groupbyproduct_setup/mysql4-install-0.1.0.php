<?php
$installer = $this;
$installer->startSetup();

/*create Product Attribute */

$installerClass = new Mage_Catalog_Model_Resource_Eav_Mysql4_Setup('core_setup');
$installerClass->removeAttribute('catalog_product', 'custom_color');
$installerClass->addAttribute('catalog_product', 'custom_color', array(
        'group'                     => 'General',
        'input'                     => 'select',
        'type'                      => 'int',
        'label'                     => 'Product Color',
        'global'                    => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
        'visible'                   => 1,
        'required'                  => 0,
        'visible_on_front'          => 1,
        'is_html_allowed_on_front'  => 0,
        'is_configurable'           => 0,
        'searchable'                => 0,
        'filterable'                => 0,
        'comparable'                => 0,
        'unique'                    => false,
        'user_defined'              => true,
        'default'          			=> 0,
        'is_user_defined'           => true,
        'used_in_product_listing'   => false,
		'option' => array (
						'values' => array (
									0 => 'Black',
									1 => 'Blue',
									2 => 'Red',
									3 => 'Orange',
									4 => 'Yellow',
								),
					)
));

$installerClass = new Mage_Catalog_Model_Resource_Eav_Mysql4_Setup('core_setup');
$installerClass->removeAttribute('catalog_product', 'custom_size');
$installerClass->addAttribute('catalog_product', 'custom_size', array(
        'group'                     => 'General',
        'input'                     => 'select',
        'type'                      => 'int',
        'label'                     => 'Product Size',
        'global'                    => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
        'visible'                   => 1,
        'required'                  => 0,
        'visible_on_front'          => 1,
        'is_html_allowed_on_front'  => 0,
        'is_configurable'           => 0,
        'searchable'                => 0,
        'filterable'                => 0,
        'comparable'                => 0,
        'unique'                    => false,
        'user_defined'              => true,
        'default'          			=> 0,
        'is_user_defined'           => true,
        'used_in_product_listing'   => false,
		'option' => array (
						'values' => array (
									0 => '30',
									1 => '32',
									2 => '34',
									3 => '36',
									4 => '38',
									5 => '40',
								),
					)
));

$installerClass = new Mage_Catalog_Model_Resource_Eav_Mysql4_Setup('core_setup');
$installerClass->removeAttribute('catalog_product', 'product_group_code');
$installerClass->addAttribute('catalog_product', 'product_group_code', array(
        'group'                     => 'General',
        'input'                     => 'text',
        'type'                      => 'varchar',
        'label'                     => 'Product Group Code',
        'global'                    => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
        'visible'                   => 1,
        'required'                  => 0,
        'visible_on_front'          => 1,
        'is_html_allowed_on_front'  => 0,
        'is_configurable'           => 0,
        'searchable'                => 0,
        'filterable'                => 0,
        'comparable'                => 0,
        'unique'                    => false,
        'user_defined'              => true,
        'default'                   => null,
        'is_user_defined'           => true,
        'used_in_product_listing'   => false,
));

$this->endSetup();
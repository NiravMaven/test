<?php

class Maven_Groupbyproduct_Model_System_Config_Source_Mainattributecolor
{
    public function toOptionArray()
    {
        $type = Mage::getModel('eav/entity_type');
		$type->loadByCode('catalog_product');

		$attrs = Mage::getResourceModel('eav/entity_attribute_collection');
		$attrs->setEntityTypeFilter($type);
		$attrs->addFieldToFilter('is_user_defined', true);
		$attrs->addFieldToFilter('frontend_input', 'select');

		$mainattribarr = array();
		/* @var $attr Mage_Eav_Model_Entity_Attribute */
		foreach ($attrs as $id => $attr) {
			$mainattribarr[$id] = array(
				'value'	=> $attr->getAttributeCode(),
				'label'	=> $attr->getFrontendLabel()
			);
		}
        return $mainattribarr;
    }
}
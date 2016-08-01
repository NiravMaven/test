<?php
class Maven_Groupbyproduct_Model_Observer
{
	public function catalogProductCollectionLoadBefore($observer)
 	{
		$collection = $observer->getEvent()->getCollection();
		$entityIdArray 	= $collection->getAllIds();
		$customProductCollection = Mage::getModel('catalog/product')->getCollection()->addFieldToFilter('entity_id',array('in'=>$entityIdArray))->getData();
		$newEntityIds = array();
		foreach ($customProductCollection as $key => $product) {
			$productObj = Mage::getModel('catalog/product')->load($product['entity_id']);
			$grpcode = $productObj->getProductGroupCode();
			$productID = $productObj->getEntityId();
			$newEntityIds[$grpcode] = $productID;
		}
		$entityids = array_values($newEntityIds);
		$customCollection =  $collection->addFieldToFilter('entity_id',array('in'=>$entityids));
		return $customCollection;
	}
	public function catalogProductCollectionLoadAfter($observer)
	{ 
		$collection 	= $observer->getEvent()->getCollection();
		return $collection;
	}
}
<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SortProducts
 *
 * @author Zohaib
 */
class M4U_SortProducts_Block_SortProducts extends Mage_Catalog_Block_Product_Abstract {

    // necessary methods

    public function getProducts() {
        $categoryid = 4;
        $category = new Mage_Catalog_Model_Category();
        $category->load($categoryid);
        $collection = $category->getProductCollection();
        $collection->addAttributeToSelect('*');       
        $collection->addAttributeToFilter('sort_order', array('neq' => ''));
        $collection->setOrder('sort_order', 'asc');
        return $collection;
    }

}

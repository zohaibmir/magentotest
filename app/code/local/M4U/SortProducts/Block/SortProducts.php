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
class M4U_SortProducts_Block_SortProducts extends Mage_Core_Block_Template {
    /*
     * Develoer: Zohaib
     * Description: Get all products with sort_order value
     * Date: 17-11-2015
     * Output: Product Collection
     */

    public function getAllProducts($direction = 'asc') {
       
        $product = new Mage_Catalog_Model_Product();
        $collection = $product->getCollection();
        $collection->addAttributeToSelect('*');
        $collection->addAttributeToFilter('sort_order', array('neq' => ''));
        $collection->setOrder('sort_order', $direction);
        return $collection;       
    }

    /*
     * Develoer: Zohaib
     * Description: Get all products from a Specific Category 
     * Date: 17-11-2015
     * Output: Product Collection
     */

    public function getProductsByCategoryId($direction = 'asc',$categoryid = 4) {

        $category = new Mage_Catalog_Model_Category();
        $category->load($categoryid);
        $collection = $category->getProductCollection();
        $collection->addAttributeToSelect('*');
        $collection->addAttributeToFilter('sort_order', array('neq' => ''));
        $collection->setOrder('sort_order', $direction);
        return $collection;
    }

}

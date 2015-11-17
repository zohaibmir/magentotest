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
 * Date: 17-11-2015
 */
class M4U_SortProducts_IndexController extends Mage_Core_Controller_Front_Action {

    public function indexAction() {
        $this->loadLayout(array('default'));
        $this->renderLayout();
    }

}

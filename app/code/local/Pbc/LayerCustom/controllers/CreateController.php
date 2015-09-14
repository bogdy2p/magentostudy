<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CreateController
 *
 * @author pbc
 */
class Pbc_LayerCustom_CreateController extends Mage_Core_Controller_Front_Action {

  public function indexAction() {
    
    $category = Mage::getModel('catalog/category')->loadByAttribute('name', 'Default Category');
    
    Mage::register('current_category', $category);
    
    $this->loadLayout();
    
    
    
    
//    $layerCustomBlock = $this->getLayout()->createBlock(
//        'Mage_Core_Block_template', 'layercustom', array('template' => 'pbc/layercustom.phtml')
//    );
//    $this->getLayout()->getBlock('content')->append($layerCustomBlock);
//    
//    
//    
//  
//    
//    $layerNavigationBlock = $this->getLayout()->createBlock(
//        'Mage_Core_Block_template', 'layercustom', array('template' => 'catalog/product/view.phtml')
//        );
//    $this->getLayout()->getBlock('content')->append($layerNavigationBlock);
    
    
    
    $this->renderLayout();
  }

}

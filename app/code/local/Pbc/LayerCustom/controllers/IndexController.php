<?php

class Pbc_LayerCustom_IndexController extends Mage_Core_Controller_Front_Action {
  
  public function layeroneAction() {
  
    echo " Accessed LayerOneAction";
    
    
    
    //rontend/base/default/template/page/html/breadcrumbs.phtml
    
    
  }
  
   public function indexAction() {
     
     $this->loadLayout();
     
     print_r($this->getLayout()->getUpdate()->getHandles());
     die();
     $this->renderLayout();
     var_dump($this);
     die();
     
    echo "This is the plain old indexaction INSIDE LAYERCUSTOM -> INDEX";
  }
  
}
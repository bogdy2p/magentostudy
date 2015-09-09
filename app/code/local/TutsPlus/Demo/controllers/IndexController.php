<?php

class TutsPlus_Demo_IndexController extends Mage_Core_Controller_Front_Action {
  
  public function sayHelloAction() {
    
    $this->loadLayout();

//    print_r($this->getLayout()->getUpdate()->getHandles());
    header('Content-Type: text-xml');
    die($this->getLayout()->getNode()->asXml());
    
    $this->renderLayout();
    
  }
  
  public function indexAction() {
    echo ' This is the DEFAULT aaction of this controller';
  }
}
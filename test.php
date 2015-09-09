<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);
require_once 'app/Mage.php';

Mage::app();


//$product = Mage::getModel('catalog/product')->load(393);


$products = Mage::getModel('catalog/product')->getCollection()
    ->addAttributeToSelect('name')
    ->addFieldToFilter('price', array('lt' => 50));


foreach ($products as $product) {
  echo ($product->getName());
}



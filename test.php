<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);
require_once 'app/Mage.php';

Mage::app();

$price_amount = 50;

$products = Mage::getModel('catalog/product')->getCollection()
    ->addAttributeToSelect('name')
    ->addFieldToFilter('price', array('lt' => $price_amount+1));

$results_number =  count($products);


echo "There are $results_number Products under price $price_amount = >";
foreach ($products as $product) {
  echo "<br />";
  echo ($product->getName());
}



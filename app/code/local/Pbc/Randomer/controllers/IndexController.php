<?php

class Pbc_Randomer_IndexController extends Mage_Core_Controller_Front_Action {

  public function asdAction() {

    $product_exists = false;
    $sku_parameter = $this->getRequest()->getParam('sku');

    if ($sku_parameter != "") {
      $id = Mage::getModel('randomer/produs')->getResource()->getIdBySku($sku_parameter);
      $produs = Mage::getModel('randomer/produs');
      if ($id) {
        $produs->load($id);
        $product_exists = true;
      }
    }

    if ($product_exists) {
      $random_quantity = rand(0, 100);
      echo $produs->getName(). " ===> ";
      echo "Random Quantity : ". $random_quantity;
      echo " Produs Quantity in Database is : ";
      
      $stock_item_of_the_product = $produs->getStockItem();

      echo $stock_item_of_the_product->getQty();
      
      $stock_item_of_the_product->setQty($random_quantity);
      
      $stock_item_of_the_product->save();
      
      echo " New stock for this product is : ";
      echo $stock_item_of_the_product->getQty();
    }
    else {

      echo 'The sku you specified does not exist. (' . $sku_parameter . ') . Please verify and retry.';
    }
  }

  
  public function thisIsNotAccessibleFromUrl() {
    
    
    
    
  }
  
  
  
  
  public function randomizeSomethingAction() {
    echo "Trying to randomize something now !";
  }

  public function indexAction() {
    echo "just plain old indexaction";
  }

}

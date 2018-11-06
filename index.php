<?php

define('CLASSES_DIR', __DIR__ . DIRECTORY_SEPARATOR . '/classes');

// require_once(CLASSES_DIR . '/Category.php');

$d = dir(CLASSES_DIR);
while(false !== ($classFile = $d->read())) {
    if ($classFile === '.' || $classFile === '..') {
        continue;
    }
    require_once(CLASSES_DIR . '/' . $classFile);
}

$category = new \OOPStore\Category("TV");
$product = new \OOPStore\Product($category, 'LG', 10000);
$product2 = new \OOPStore\Product($category, 'Samsung', 12000);
$product3 = new \OOPStore\Product($category, 'Apple', 15000);
$customer = new \OOPStore\Customer('Ivan', 'Petrenko');
$cart = new \OOPStore\Cart($customer);

$cart->addProduct($product);
$cart->addProduct($product);
$cart->addProduct($product2);
var_dump($cart->getTotal($cart));
$cart->delProduct($product2);
$cart->delProduct($product);
var_dump($cart->getTotal($cart));

// $purchase = $cart->createPurchase();
// $cart->addProduct($product);
// var_dump($cart->getTotal($cart));

// echo "Product Category:";
// var_dump($product->getCategory()->getName());
// var_dump($customer->getFirstName() . ' ' . $customer->getLastName());
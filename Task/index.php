<?php
require_once 'Product.php';
require_once 'Cart.php';
require_once '../middleware/dumper.php';

$butter = new Product('Butter', 20, 100);
$meat = new Product('Meat', 70, 20);
$cheese = new Product('Cheese', 45, 40);

$cart = new Cart;
$cart->add($butter)->add($meat)->add($cheese);

//dumper($cart);

//foreach ($cart->getProducts() as $product){
//    dumper($product);
//}

foreach ($cart->getProducts() as $product){
    $array = (array) $product;
    dumper($array);
    extract($array);
    echo '<hr>';
}




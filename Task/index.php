<?php
require_once 'Product.php';
require_once 'Cart.php';
require_once '../middleware/dumper.php';

$butter = new Product('Butter', 20, 100);
$meat = new Product('Meat', 70, 20);
$cheese = new Product('Cheese', 45, 40);

$cart = new Cart;
$cart->add($butter)->add($meat)->add($cheese);
dumper($cart);
$cart->remove('Cheese');
dumper($cart);
$bread = new Product('Bread', 5, 70);
$cart->add($bread);
dumper($cart);
$cart->remove('Bread');
$nutella = new Product('Nutella', 90, 30);
$cart->add($nutella);
dumper($cart);
echo $cart->getTotalCost();
echo '<hr>';
$cart->getTotalQuantity();
echo $cart->getAvgPrice();
$cart->add($nutella); //не добавит
$cart->add($nutella); //не добавит
$cart->add($corn = new Product('Corn', 7, 85));
dumper($cart);
var_dump($cart instanceof Product);





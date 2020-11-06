<?php
require_once 'Figure.php';
require_once 'Quadrate.php';
require_once 'Triangle.php';
require_once 'Circle.php';

$quadro = new Quadrate(5);
$tria = new Triangle(3, 5, 7);
$cir = new Circle(10);

echo $quadro->getPerimeter() . ' and ' . $quadro->getSquare() . ' and ' . $quadro->getSquarePerimeterSum() .  '<hr>';
echo $tria->getPerimeter() . ' and ' . $tria->getSquare(). ' and ' . $tria->getSquarePerimeterSum() . '<hr>';
echo $cir->getPerimeter() . ' and    ' . $cir->getSquare() . ' and ' . $cir->getSquarePerimeterSum() . '<hr>';
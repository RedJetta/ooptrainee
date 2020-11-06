<?php
require_once 'iCube.php';
require_once 'Cube.php';

$cube = new Cube(8);
echo $cube->getSquare() . ' & ' . $cube->getPerimeter();
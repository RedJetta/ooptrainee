<?php
require_once 'iSphere.php';
require_once 'Sphere.php';

$sphere = new Sphere(5);
echo $sphere->getSurfaceSquare() . ' - ' . $sphere->getVolume();
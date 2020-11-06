<?php
require_once 'iFigure3D.php';
require_once 'Cube2.php';
require_once '../1/iFigure.php';
require_once '../1/Disk.php';
require_once '../../../middleware/dumper.php';


$arr = [];

$cube = new Cube2(5);
$cube2 = new Cube2(7);
$cube3 = new Cube2(3);
$disk = new Disk(1);
$disk2 = new Disk(5);

$arr[] = $cube;
$arr[] = $cube2;
$arr[] = $disk;
$arr[] = $disk2;
$arr[] = $cube3;

dumper($arr);
foreach ($arr as $item){
    if ($item instanceof iFigure3D){
        echo  'implement iFigure3D; Surface square - ';
        echo $item->getSurfaceSquare();
        echo '<br>';
    }elseif ($item instanceof iFigure){
        echo 'implement iFigure; Square - ';
        echo $item->getSquare();
        echo '<br>';
    }
}



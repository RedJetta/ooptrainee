<?php
require_once 'iFigure.php';
require_once 'Octagon.php';
require_once 'Disk.php';
require_once 'FigureCollection.php';

$figureCollection = new FigureCollection();


$octagon = new Octagon(2);
$disk = new Disk(5);

echo $octagon->getSquare() . ' - ' . $octagon->getPerimeter() . '<br>';
echo $disk->getSquare() . ' - ' . $disk->getPerimeter() . '<hr>';

$figureCollection->addFigure($octagon);
$figureCollection->addFigure($disk);
$figureCollection->addFigure(new Octagon(4));
$figureCollection->showCollection();
echo $figureCollection->getTotalPerimeter();

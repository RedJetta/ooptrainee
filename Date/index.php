<?php
require_once 'Date.php';
$date = new Date();
$date2 = new Date('12-02-2007');
echo $date . '<br>';
echo $date->format('l, j F Y');
echo $date2->getMonth('ru');

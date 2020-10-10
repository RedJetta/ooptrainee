<?php
require_once 'ArrayHelper.php';

$array = [1, 3, 2];
$arrayHelperObject = new ArrayHelper();
echo $arrayHelperObject->getSum($array, 3) . '<hr>';
echo $arrayHelperObject->calcSqrt($array, 3);
<?php
require_once 'TestTrait.php';
require_once 'TestTrait2.php';
require_once 'TestTrait3.php';
require_once 'TestClass.php';

$test = new TestClass(4,5);
echo $test->getSum();

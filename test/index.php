<?php
require_once 'AbstractClass.php';
require_once 'Second.php';

$test = new Second();
$test->setName(123);
echo $test->getName();
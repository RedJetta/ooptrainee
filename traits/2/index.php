<?php
require_once 'Trait1.php';
require_once 'Trait2.php';
require_once 'Trait3.php';
require_once 'Trait4.php';
require_once 'Trait5.php';
require_once 'Test2.php';

$test = new Test2();
echo $test->method5() . '<br>';
echo $test->method6() . '<br>';
echo $test->method7() . '<br>';

var_dump(trait_exists('Trait1'));
var_dump(trait_exists('Trait6'));
var_dump(get_declared_traits());

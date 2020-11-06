<?php
require_once 'iProgrammer.php';
require_once 'Employee3.php';
require_once 'Programmer2.php';

$programmer = new Programmer2('Vasya', 1500);
$programmer->addLang('php');
$programmer->addLang('mysql');
echo $programmer->getName() . ' - ' . $programmer->getSalary();
echo $programmer->getLangs();


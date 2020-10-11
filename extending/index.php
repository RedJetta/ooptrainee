<?php
require_once 'User.php';
require_once 'Employee.php';
require_once 'Programmer.php';
require_once 'Driver.php';

$proger = new Programmer();
$proger->setName('Maxim');
$proger->setAge(21);
$proger->setSalary(2500);
$proger->setLangs(['html','php','js']);
echo $proger->getName();
echo $proger->getAge();
echo $proger->getSalary();
print_r($proger->getLangs());

$driver = new Driver();
$driver->setName('Ivan');
$driver->setAge(23);
$driver->setSalary(500);
$driver->setDriverExp(4);
$driver->setCategory(['Am', 'A1', 'B', 'BE']);

echo $driver->getName();
echo $driver->getAge();
echo $driver->getSalary();
echo $driver->getDriverExp();
print_r($driver->getCategory());
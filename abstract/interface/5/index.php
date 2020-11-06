<?php
require_once 'iUser3.php';
require_once 'iEmployee.php';
require_once 'Employee2.php';

$employee = new Employee2();
$employee->setName('Pasha');
$employee->setAge(22);
$employee->setSalary(1500);
echo $employee->getName() . ' - ' . $employee->getAge() . ' - ' . $employee->getSalary();

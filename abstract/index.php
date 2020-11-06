<?php
require_once 'AbstractUser.php';
require_once 'EmployeeA.php';
require_once 'StudentA.php';

$employee = new EmployeeA();
$employee->setName('Vasya');
$employee->setSalary(1250);
echo $employee->getName() . ' - ' . $employee->getSalary() . ' | ';

$student = new StudentA();
$student->setName('Maxik');
$student->setScolarship(500);
echo $student->getName() . ' - ' . $student->getScolarship();

echo '<hr>';

$employee->increaseRevenue(500);
$student->increaseRevenue(70);
echo $employee->getName() . ' - ' . $employee->getSalary() . ' | ';
echo $student->getName() . ' - ' . $student->getScolarship();

echo '<hr>';

$employee->decreaseRevenue(200);
$student->decreaseRevenue(20);
echo $employee->getName() . ' - ' . $employee->getSalary() . ' | ';
echo $student->getName() .' - '. $student->getScolarship();
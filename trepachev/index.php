<?php
require_once 'employee_2.php';


$obj = new Employee('Ivan', 35, 2100);
$obj2 = new Employee('Eygeen', 23, 2000);
echo $obj->getSalary() . '<hr>' . $obj2->getSalary();
?>
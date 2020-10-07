<?php
require_once 'employee_2.php';
require_once 'City.php';


$obj = new Employee('Ivan', 35, 2100);
$obj2 = new Employee('Eygeen', 23, 2000);
echo $obj->getSalary() . '<hr>' . $obj2->getSalary() . '<hr>';

$cities = [
    new City('Minsk', 9000000),
    new City('Moscow', 140000000),
    new City('Kiev', 2000000),
    new City('Amsterdam', 12000000),
    new City('Berlin', 23000000)
];

foreach($cities as $city){
    echo $city->getName() . ' _|_ ' . $city->getPopulation() . '<br>';
}
?>
<?php
require_once 'employee_2.php';
require_once 'City.php';
require_once 'Student_12.php';
require_once 'Arr_13.php';
require_once 'City_14.php';
require_once 'ArrayMethodChain.php';


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

$student = new Student_12('Petr');
echo $student->getCourse() . ' | ' . $student->getName() . '<hr>';


$numbers = new Arr_13();
$numbers->add($array = [1, 5, 7, 7]);
var_dump($numbers->getNumbers());
echo $numbers->getAvg() . '<hr>';

$city = new City_14('Minsk', 1067, '9mln');
$city_2 = new City_14('Piter', 1603, '24mln');
$props = [
    'name',
    'foundation',
    'population'
];
foreach($props as $prop){
    echo $city->$prop . '<hr>';
}

$arrChain = new ArrayMethodChain();
echo $arrChain->add(1)->add(2)->add(5)->getSum() . '<br>';
var_dump($arrChain);
echo '<br>';
$extraArray=[5,7,9,12,3];
echo $arrChain->add(3)->append($extraArray)->add(6)->getSum() . '<br>';
var_dump($arrChain);



?>
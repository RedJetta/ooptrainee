<?php
class Employee {
    public $name;
    public $age;
    public $salary;

    public function show($str){
        echo $str . '!!!';
    }

    public function setName($name){
        $this->name = $name;
    }

    public function setAge($age){
        if($age > 18){
        $this->age = $age;
        }
    }

    public function setSalary($salary){
        $this->salary = $salary;
    }

    public function getName(){
        return $this->name;
    }

    public function getAge(){
        return $this->age;
    }

    public function getSalary(){
        return $this->salary;
    }

    public function checkAge(){
        if($this->age > 18){
            return true;
        }else
            return false;
    }

    public function doubleSalary(){
        $this->salary = $this->salary*2;
    }

}

$emp1 = new Employee();
$emp1 -> name = 'Ivan';
$emp1 -> age = 15;
$emp1 -> salary = 960;

$emp2 = new Employee();
$emp2 -> name = 'Vasya';
$emp2 -> age = 26;
$emp2 -> salary = 2400;


echo $emp1->age + $emp2->age       . '<hr>';
echo $emp1->salary + $emp2->salary . '<hr>';
echo $emp1->show('Hello') . '<hr>';
echo $emp1->getName() . ', ' . $emp1->getAge() . ', ' . $emp1->getSalary() . '<hr>';
echo $emp2->getName() . ', ' . $emp2->getAge() . ', ' . $emp2->getSalary() . '<hr>';
var_dump($emp1->checkAge());
echo $emp1->getSalary() + $emp2->getSalary() . '<hr>';
$emp1->setName('Petr');
$emp1->setAge(12);
$emp1->setSalary(1250);
echo $emp1->getName() . ', ' . $emp1->getAge() . ', ' . $emp1->getSalary() . '<hr>';
echo $emp1->getSalary()+$emp2->getSalary() . '<hr>';
$emp2->doubleSalary();
echo $emp2->getSalary();
?>
<?php
class Employee{
    private $name;
    private $age;
    private $salary;

    public function __construct($name, $age, $salary)
    {
        $this->name=$name;
        $this->age=$age;
        $this->salary=$salary;
    }


    public function getSalary()
    {
        return $this->salary;
    }


}

$emp1 = new Employee('Vasya', 25, 1250);
$emp2 = new Employee('Petr', 30, 1700);
echo $emp1->getSalary() + $emp2->getSalary();
?>
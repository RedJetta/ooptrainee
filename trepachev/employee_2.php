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
        return $this->salary . '$';
    }


    public function setSalary($salary)
    {
        $this->salary = $salary;
    }


    public function getName()
    {
        return $this->name;
    }


    public function setName($name)
    {
        $this->name = $name;
    }


    public function getAge()
    {
        return $this->age;
    }


    public function setAge($age)
    {
        if ($this->isAgeCorrect($age)) {
            $this->age = $age;
        }else return false;
    }

    private function isAgeCorrect($age){
        if ($age >= 1 && $age <= 100){
            return true;
        }else return false;
    }

}

$emp1 = new Employee('Vasya', 25, 1250);
$emp2 = new Employee('Petr', 30, 1700);
echo $emp1->getSalary() . ' | ' .  $emp2->getSalary() . '<hr>';
$emp2->setAge(150);
echo $emp2->getAge();
?>
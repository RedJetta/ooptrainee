<?php


class Employee2 implements iEmployee
{
    private $name;
    private $age;
    private $salary;

    public function setSalary($salary)
    {
        // TODO: Implement setSalary() method.
        $this->salary = $salary;
    }

    public function getSalary()
    {
        // TODO: Implement getSalary() method.
        return $this->salary;
    }

    public function setName($name)
    {
        // TODO: Implement setName() method.
        $this->name = $name;
    }

    public function getName()
    {
        // TODO: Implement getName() method.
        return $this->name;
    }

    public function setAge($age)
    {
        // TODO: Implement setAge() method.
        $this->age = $age;
    }

    public function getAge()
    {
        // TODO: Implement getAge() method.
        return $this->age;
    }
}
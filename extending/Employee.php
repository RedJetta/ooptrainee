<?php
require_once 'User.php';

class Employee extends User
{
    private $salary;

    /**
     * @return mixed
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * @param mixed $salary
     */
    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

//    public function setName($name)
//    {
//        if (strlen($name)<=10) {
//            return parent::setName($name); // TODO: Change the autogenerated stub
//        }else return false;
//    }
}
<?php

class User{
    public $name;
    public $age;

    public function setAge($age){
        if ($this->isAgeCorrect($age)){
        $this->age = $age;
        }else return false;
    }

    public function getAge(){
        return $this->age;
    }

    public function addAge($add){
        if ($this->isAgeCorrect($this->age+$add)){
        $this->age=$this->age+$add;
        }else return false;
    }

    public function subAge($sub){
        if ($this->isAgeCorrect($this->age-$sub)){
            $this->age=$this->age-$sub;
        }else return false;
    }

    public function isAgeCorrect($age){
        if ($age >= 18 && $age<=60){
            return true;
        }else
            return false;
    }
}

$obj = new User();
$obj->setAge(50 );
$obj->addAge(7);
$obj->subAge(1);
echo $obj->getAge();



?>
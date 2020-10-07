<?php


class Student_12
{
    private $name;
    private $course;

    public function __construct($name)
    {
        $this->name=$name;
        $this->course=1;
    }

    public function getName()
    {
        return $this->name;
    }


    public function getCourse()
    {
        return $this->course;
    }

    public function transferToNextCourse(){
        if ($this->checkCourse()) {
            $this->course = $this->course + 1;
        }else return false;
    }

    private function checkCourse(){
        if ($this->course<5){
            return true;
        }else return false;

    }


}
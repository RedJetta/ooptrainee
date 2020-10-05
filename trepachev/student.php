<?php
class Student{
    private $name;
    private $course;

    public function setCourse($course){
        $this->course=$course;
    }

    public function setName($name){
        $this->name=$name;
    }



    public function transferToNextCourse($course){
        if ($this->isCourseCorrect($course)){
            $this->course = $this->course+1;
        }else return false;
    }

    private function isCourseCorrect($course){
        if($course>=1 && $course<5){
            return true;
        }else return false;
    }

    public function getCourse()
    {
        return $this->course;
    }

    public function getName()
    {
        return $this->name;
    }
}

$student = new Student();
$student->setName('Maxim');
$student->setCourse(3);
echo $student->getName() . ' | ' .  $student->getCourse() . '<hr>';
$student->transferToNextCourse($student->getCourse());
$student->transferToNextCourse($student->getCourse());

echo $student->getCourse()
?>
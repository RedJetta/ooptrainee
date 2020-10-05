<?php

class Rectangle{
    public $width;
    public $height;

    public function getSquare(){
        return $this->height * $this->width;
    }

    public function getPerimeter(){
        return $this->height*2 + $this->width*2;
    }

    public function getWidth(){
        return $this->width;
    }

    public function getHeight(){
        return $this->height;
    }

    public function setWidth($width){
        $this->width=$width;
    }

    public function setHeight($height){
        $this->height=$height;
    }
}

$obj = new Rectangle();
$obj->setHeight(25);
$obj->setWidth(4);
echo $obj->getPerimeter() . ' | ';
echo $obj->getSquare();




?>
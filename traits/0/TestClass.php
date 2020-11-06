<?php


class TestClass
{
    use TestTrait, TestTrait2, TestTrait3;

    public function getA(){
        return $this->a;
    }
    public function getB(){
        return $this->b;
    }

    public function getSum(){
        return $this->add1()+$this->add2()+$this->add3();
    }
}
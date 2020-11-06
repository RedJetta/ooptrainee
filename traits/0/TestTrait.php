<?php


trait TestTrait
{
    private $a;
    private $b;
    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    private function add1(){
        return 1;
    }
}
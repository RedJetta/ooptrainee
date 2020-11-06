<?php


class Triangle extends Figure
{
    private $a;
    private $b;
    private $c;

    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function getSquare()
    {
        $half = $this->getPerimeter()/2;
        return sqrt($half*($half-$this->a)*($half-$this->b)*($half-$this->c));
    }

    public function getPerimeter()
    {
        return $this->a + $this->b + $this->c;
    }
}
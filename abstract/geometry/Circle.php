<?php


class Circle extends Figure
{
    private $r;
    const PI = 3.14;

    public function __construct($r)
    {
        $this->r = $r;
    }

    public function getSquare()
    {
       return self::PI*pow($this->r, 2);
    }

    public function getPerimeter()
    {
        return 2*self::PI*$this->r;
    }
}
<?php


class Octagon implements iFigure
{
    public $a;

    public function __construct($a)
    {
        $this->a = $a;
    }

    public function getSquare()
    {
        return 2 * pow($this->a, 2) * (1+sqrt(2));
    }

    public function getPerimeter()
    {
        return 8 * $this->a;
    }
}
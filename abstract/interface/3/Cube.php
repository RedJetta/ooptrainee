<?php


class Cube implements iCube
{
    private $a;

    public function __construct($a)
    {
        $this->a = $a;
    }

    public function getSquare()
    {
        // TODO: Implement getSquare() method.
        return pow($this->a, 2);
    }

    public function getPerimeter()
    {
        // TODO: Implement getPerimeter() method.
        return 4 * $this->a;
    }
}
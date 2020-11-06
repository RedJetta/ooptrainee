<?php


class Disk2 implements iFigure2, iCircle
{
    private $r;
    const PI = 3.14;

    public function getR()
    {
        // TODO: Implement getR() method.
        return $this->r;
    }

    public function getD()
    {
        // TODO: Implement getD() method.
        return 2*$this->r;
    }

    public function getSquare()
    {
        // TODO: Implement getSquare() method.
        return pow($this->r,2)*self::PI;

    }

    public function getPerimeter()
    {
        // TODO: Implement getPerimeter() method.
        return 2 * $this->r * self::PI;
    }
}
<?php


class Quadrate2 implements iFigure2, iTetragon
{
    private $a;

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

    public function getA()
    {
        // TODO: Implement getA() method.
        return $this->a;
    }

    public function getB()
    {
        // TODO: Implement getB() method.
        return $this->a;
    }

    public function getC()
    {
        // TODO: Implement getC() method.
        return $this->a;
    }

    public function getD()
    {
        // TODO: Implement getD() method.
        return $this->a;
    }
}
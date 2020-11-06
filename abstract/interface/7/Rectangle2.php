<?php


class Rectangle2 implements iFigure2, iTetragon
{
    private $a;
    private $b;

    public function getSquare()
    {
        // TODO: Implement getSquare() method.
        return $this->a*$this->b;
    }

    public function getPerimeter()
    {
        // TODO: Implement getPerimeter() method.
        return 2 * $this->a + 2 * $this->b;
    }

    public function getA()
    {
        // TODO: Implement getA() method.
        return $this->a;
    }

    public function getB()
    {
        // TODO: Implement getB() method.
        return $this->b;
    }

    public function getC()
    {
        // TODO: Implement getC() method.
        return $this->a;
    }

    public function getD()
    {
        // TODO: Implement getD() method.
        return $this->b;
    }
}
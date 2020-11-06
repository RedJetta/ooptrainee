<?php


class Cube2 implements iFigure3D
{
    private $a;

    public function getVolume()
    {
        // TODO: Implement getVolume() method.
        return pow($this->a, 3);
    }

    public function getSurfaceSquare()
    {
        // TODO: Implement getSurfaceSquare() method.
        return pow($this->a, 2) * 6;
    }

    public function __construct($a)
    {
        $this->a = $a;
    }
}
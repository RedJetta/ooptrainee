<?php


class Sphere implements iSphere
{
    private $r;

    public function __construct($r)
    {
        $this->r = $r;
    }

    public function getVolume()
    {
        // TODO: Implement getVolume() method.
        return (4*self::PI*pow($this->r,3))/3;
    }

    public function getSurfaceSquare()
    {
        // TODO: Implement getSurfaceSquare() method.
        return 4*self::PI*pow($this->r, 2);
    }
}
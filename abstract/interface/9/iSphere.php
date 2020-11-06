<?php


interface iSphere
{
    const PI = 3.14;
    public function __construct($r);
    public function getVolume();
    public function getSurfaceSquare();
}
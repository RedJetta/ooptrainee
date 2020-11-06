<?php


class Geometry
{
    private static $pi = 3.14;

    public static function getCircleSquare($radius){
        return self::$pi * $radius * $radius;
    }
    public static function getCircleCircuit($radius){
        return 2 * self::$pi * $radius;
    }

    public static function getBallVolume($radius){
        return 4/3 * self::getCircleSquare($radius) * $radius;
    }
}
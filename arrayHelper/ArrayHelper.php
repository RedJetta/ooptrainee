<?php


class ArrayHelper
{

    private function getSum($array, $pow){
        $sum = 0;
        foreach ($array as $item){
            $sum = $sum + pow($item, $pow);
        }
        return $sum;
    }

    public function calcSqrt($array, $pow){
        return pow($this->getSum($array, $pow), (1/$pow));
    }


}
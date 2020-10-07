<?php


class Arr_13
{
    private $numbers = [];

    public function add($array){
        foreach ($array as $item){
            $this->numbers[]=$item;
        }
    }


    public function getNumbers()
    {
        return $this->numbers;
    }

    public function getAvg(){
        return $average = array_sum($this->numbers)/count($this->numbers);
    }


}
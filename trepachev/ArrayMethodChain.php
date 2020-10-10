<?php


class ArrayMethodChain
{
    private $numbers= [];

    public function add($number){
        $this->numbers[] = $number;
        return $this;
    }

    public function getSum(){
        return array_sum($this->numbers);
    }

    public function append($extraArray){
        foreach ($extraArray as $item){
            $this->numbers[] = $item;
        }
        return $this;
    }
}
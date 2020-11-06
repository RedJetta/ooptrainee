<?php


class FigureCollection
{
    private $collection = [];

    public function addFigure(iFigure $figure){
        $this->collection[] = $figure;
    }

    public function showCollection(){
        foreach ($this->collection as $item){
            var_dump($item);
            echo '<br>';
        }
    }

    public function getTotalPerimeter(){
        $total = 0;
        foreach ($this->collection as $item){
            $total =$total + $item->getPerimeter();
        }
        return $total;
    }
}
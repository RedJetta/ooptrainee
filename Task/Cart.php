<?php


class Cart
{
    private $products = [];

    public function add($product){
        $this->products[] = $product;
        return $this;
    }


    public function remove($unsetName){
        foreach ($this->products as $key => $item){
            if($item->getName() == $unsetName ){
              echo 'Find' . $key . '<hr>';
              unset($this->products[$key]);
            }

        }
    }

    public function getTotalCost(){
        $total = 0;
        foreach ($this->products as $item){
            $total += $item->getPrice();
        }
        return $total;
    }

    public function getTotalQuantity(){
        $total = 0;
        foreach ($this->products as $item){
            $total += $item->getQuantity();
        }
        echo $total;
    }

    public function getAvgPrice(){
        $total = $this->getTotalCost();
        $count = count($this->getProducts());
        return $avg = $total/$count;
    }
    /**
     * @return array
     */
    public function getProducts()
    {
        return $this->products;
    }
}
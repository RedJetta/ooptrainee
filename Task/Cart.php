<?php


class Cart
{
    private $products = [];

    public function add($product){
        $this->products[] = $product;
        return $this;
    }


//    public function remove($unsetName){
//        foreach ($this->products as $item){
//            if($item == )
//        }
//    }
    /**
     * @return array
     */
    public function getProducts()
    {
        return $this->products;
    }
}
<?php


class Cart
{
    private $products = [];


    public function addProduct($id, $count)
    {
        if ($this->check($id)) {

            $this->products[$id] += (int)$count;
        }else{
            $this->products[$id] = (int)$count;
        }

    }

    public function getProducts()
    {
        return $this->product;

    }

    private function check($id)
    {
        return isset($this->products[$id]) ? true : false;

    }

    public function getCount()
    {

        return array_sum($this->products);

    }

}
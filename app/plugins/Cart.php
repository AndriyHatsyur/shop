<?php

require 'Cart/CartProduct.php';

class Cart
{
    private $products = [];


    public function addProduct($id, $product, $count)
    {
        if ($this->check($id)) {

            $this->products[$id]->changeCount($count);
        }else{
            $this->products[$id] = new CartProduct($product, $count);
        }

    }

    public function getProducts()
    {
        return $this->products;

    }

    public function getProduct ($id)
    {
        if ($this->check($id))
            return $this->products[$id];
        return false;
    }

    private function check($id)
    {
        return isset($this->products[$id]) ? true : false;

    }

    public function deleteProduct($id)
    {
        if ($this->check($id))
            unset($this->products[$id]);

    }

    public function getCountProducts()
    {
        $count = 0;
        foreach ($this->products as $product) {
            $count += $product->count;
        }
        return $count;

    }

    public function getTotalSum()
    {
        $total = 0;
        foreach ($this->products as $product) {
            $total += $product->getSum();
        }
        return $total;
    }

}
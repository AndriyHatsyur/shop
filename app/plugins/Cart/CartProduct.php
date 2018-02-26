<?php

class CartProduct
{
    public $title;
    public $image;
    public $count;
    public $price;

    public function __construct($product, $count)
    {
        $this->title = $product->title;
        $this->image = $product->image;
        $this->price = $product->sale;
        $this->count = (int)$count;
    }

    public function getSum()
    {
        return $this->count * $this->price;
    }

    public function changeCount($count)
    {
        $this->count += (int)$count;
    }
}
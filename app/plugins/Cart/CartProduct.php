<?php

class CartProduct
{
    public $id;
    public $title;
    public $link;
    public $image;
    public $count;
    public $price;

    public function __construct($product, $count)
    {
        $this->id    = $product->id;
        $this->title = $product->title;
        $this->link  = $product->link;
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
        if ($this->count > 0)
            $this->count += (int)$count;
            if ($this->count == 0)
                $this->count = 1;
    }
}
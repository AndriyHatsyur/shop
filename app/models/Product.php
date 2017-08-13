<?php

use Phalcon\Mvc\Model;

class Product extends Model
{
    public $id;

    public $title;

    public $text;

    public $price;

    public $link;

    public function initialize()
    {
        $this->hasMany("id", "ProductCategory", "product_id");
    }

}
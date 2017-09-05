<?php

use Phalcon\Mvc\Model;

class Product extends Model
{
    public $id;

    public $title;

    public $description;

    public $price;

    public $sale;

    public $link;

    public $image;

    public function initialize()
    {
        $this->hasMany("id", "ProductCategory", "product_id");
    }

}
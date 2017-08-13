<?php

use Phalcon\Mvc\Model;

class ProductrCategory extends Model
{
    public $id;

    public $product_id;

    public $category_id;

    public function initialize()
    {
        $this->belongsTo("product_id", "Product", "id");
        $this->belongsTo("category_id", "Category", "id");
    }

}
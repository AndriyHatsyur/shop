<?php

use Phalcon\Mvc\Model;

class Category extends Model
{
    public $id;

    public $name;

    public $number;

    public $link;

    public function initialize()
    {
        $this->hasMany("id", "ProductCategory", "category_id");
    }

}
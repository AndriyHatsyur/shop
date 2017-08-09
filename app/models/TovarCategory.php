<?php

use Phalcon\Mvc\Model;

class TovarCategory extends Model
{
    public $id;

    public $tovar_id;

    public $category_id;

    public function initialize()
    {
        $this->belongsTo("tovar_id", "Tovar", "id");
        $this->belongsTo("category_id", "Category", "id");
    }

}
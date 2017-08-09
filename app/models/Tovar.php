<?php

use Phalcon\Mvc\Model;

class Tovar extends Model
{
    public $id;

    public $title;

    public $text;

    public $price;

    public $link;

    public function initialize()
    {
        $this->hasMany("id", "TovarCategory", "tovar_id");
    }

}
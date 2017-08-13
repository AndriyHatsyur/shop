<?php

use Phalcon\Mvc\Model;

class Comment extends Model
{
    public $id;

    public $user_id;

    public $product_id;

    public $text;

}
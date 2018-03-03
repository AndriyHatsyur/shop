<?php

use Phalcon\Mvc\Model;

class OrderProduct extends Model
{
    public $id;
    public $title;
    public $image;
    public $link;
    public $count;
    public $price;
    public $order_id;

    public function initialize()
    {
        $this->belongsTo("order_id", "Order", "id");
    }
}
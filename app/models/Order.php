<?php
use Phalcon\Mvc\Model;

class Order extends Model
{
    public $id;
    public $sum;
    public $count;
    public $user = 0;
    public $status = "new";

    public function initialize()
    {
        $this->hasMany("id", "OrderProduct", "order_id");

        $this->hasOne("id", "Address", "order_id");
    }


}
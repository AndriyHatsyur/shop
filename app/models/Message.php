<?php

use Phalcon\Mvc\Model;

class Message extends Model
{
    public $id;

    public $name;

    public $mobile;

    public $email;

    public $text;

    public $status = "new";

}
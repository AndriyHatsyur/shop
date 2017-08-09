<?php

use Phalcon\Mvc\Model;

class Comment extends Model
{
    public $id;

    public $user_id;

    public $tovar_id;

    public $text;

}
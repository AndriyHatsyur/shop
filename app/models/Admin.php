<?php

use Phalcon\Mvc\Model;
use Phalcon\Validation;
use Phalcon\Validation\Validator\Uniqueness;

class Admin extends Model
{
    public $id;

    public $login;

    public $password;
    
}
<?php

use Phalcon\Mvc\Model;

class Representative extends Model
{
    public $id;

    public $name;

    public $surname;

    public $birth;

    public $email;

    public $region;

    public $area;

    public $city;

    public $mobile;

    public $status = "new";

}
<?php

use Phalcon\Mvc\Model;

class User extends Model
{
    public $id;

    public $name;

    public $email;

    public $password;

    public function validation()
    {
        $validator = new Validation();

        $validator->add(
            'email',
            new Uniqueness(
                [
                    'message' => 'Користувач з такою поштою уже зареєстрований',
                ]
            )
        );

        return $this->validate($validator);
    }
}
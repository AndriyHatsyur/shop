<?php

use Phalcon\Mvc\Model;
use Phalcon\Validation;
use Phalcon\Validation\Validator\Uniqueness;
use Phalcon\Validation\Validator\Email;

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

        $validator->add(
            'email',
            new Email(
                [
                    "message" => "Адресу елекронної пошти введено невірно"
                ]
            )
        );

        return $this->validate($validator);
    }
}
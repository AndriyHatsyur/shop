<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


class Mail 
{

    private $mail;
    private $emailAdmin = 'stasuk.lilia@ukr.net';

    function __construct() {
       
        $this->mail = new PHPMailer();
        $this->setConfig();
    }

    private function setConfig()
    {
        $this->mail->CharSet = "UTF-8";
        $this->mail->IsSMTP(); // telling the class to use SMTP
        $this->mail->SMTPAuth = true; // enable SMTP authentication
        $this->mail->SMTPSecure = "ssl"; // sets the prefix to the servier
        $this->mail->Host = "smtp.gmail.com"; // sets GMAIL as the SMTP server
        $this->mail->Port = 465; // set the SMTP port for the GMAIL server
        $this->mail->Username = "myavon.pp.ua@gmail.com"; // GMAIL username
        $this->mail->Password = "Avon2018"; // GMAIL password
        $this->mail->isHTML(true);                                  // Set email format to HTML
        $this->mail->SetFrom('myavon.pp.ua@gmail.com', 'MY AVON');

    }

    public function sendMailUserContact($message)
    {
        $this->mail->AddAddress($message->email);
        $this->mail->Subject = 'Ваше повідомлення отримано!';
        $this->mail->Body    = $message->name .' ваше повідомлення отримано, найближчим часом ми звами зв`яжемось.';
        $this->mail->Send();
        
    }

    public function sendMailAdminContact ($message)
    {
        $this->mail->AddAddress($this->emailAdmin);
        $this->mail->Subject = 'Нове повідомлення з myavon.pp.ua! Від ' . $message->name;
        $this->mail->Body    = 'Ім`я: ' . $message->name . '<br>' 
                                . 'Телефон: ' . $message->mobile . '<br>' . $message->text;
        $this->mail->Send();
    }

    public function sendMailUserRepresentative($representative)
    {
        $this->mail->AddAddress($representative->email);
        $this->mail->Subject = 'Вітаємо!!! Вашу заявку на реєстрацію отримано!';
        $this->mail->Body    = 'Вітаємо, ' .$representative->name .'! Вашу заявку на реєстрацію отримано, найближчим часом ми звами зв`яжемось.';
        $this->mail->Send();        
    }

    public function sendMailAdminRepresentative ($representative)
    {
        $this->mail->AddAddress($this->emailAdmin);
        $this->mail->Subject = 'Нова заявка на реєстрацію з myavon.pp.ua! Від ' . $representative->name;
        $this->mail->Body    = 'Ім`я: ' . $representative->name . '<br><br>' 
                                . 'Прізвище: ' . $representative->surname . '<br><br>' 
                                . 'Дата народження: ' . $representative->birth . '<br><br>' 
                                . 'Область: ' . $representative->region . '<br><br>' 
                                . 'Адміністративний район: ' . $representative->area . '<br><br>' 
                                . 'Населений пункт: ' . $representative->city . '<br><br>'
                                . 'Телефон: ' . $representative->mobile;
        $this->mail->Send();
    }

    public function sendMailAdminOrder($order)
    {

        $this->mail->AddAddress($this->emailAdmin);
        $this->mail->Subject = 'Нове замовлення з myavon.pp.ua! Від ' . $order->address->name;
        $this->mail->Body    = "<h3>Замовлення № "  . $order->id . "</h3>";

        foreach ($order->orderProduct as $product)
        {
            $this->mail->Body .= $product->title . "    " . $product->count . " шт   " . $product->price . " грн <br><br>";
        }

        $this->mail->Body .=  "<b>Загальна кількість: $order->count шт</b><br>";
        $this->mail->Body .=  "<b>Загальна сума: $order->sum  грн</b><br><br>";

        $this->mail->Body .= "<h4>Адреса доставки</h4>";

        $this->mail->Body .=   'Ім`я: ' . $order->address->name . '<br>'.
                                'Прізвище: '. $order->address->surname . '<br>'.
                                'Мобільний телефон: '. $order->address->mobile . '<br>'.
                                'Адреса електронної пошти: '. $order->address->email . '<br>'.
                                'Область: '. $order->address->region . '<br>'.
                                'Адміністративний район: '. $order->address->area . '<br>'.
                                'Населений пункт: '. $order->address->city . '<br>'.
                                'Відділення Нової Пошти: '. $order->address->post . '<br>';

        $this->mail->Send();
    }

    public function sendMailUserOrder($order)
    {

        $this->mail->AddAddress($order->address->email);
        $this->mail->Subject = $order->address->name . ' ваше замовлення отримано';
        $this->mail->Body    = "<h3>Замовлення № "  . $order->id . "</h3>";

        foreach ($order->orderProduct as $product)
        {
            $this->mail->Body .= $product->title . "    " . $product->count . " шт   " . $product->price . " грн <br><br>";
        }

        $this->mail->Body .=  "<b>Загальна кількість: $order->count шт</b><br>";
        $this->mail->Body .=  "<b>Загальна сума: $order->sum  грн</b><br><br>";

        $this->mail->Body .= "<h4>Адреса доставки</h4>";

        $this->mail->Body .=   'Ім`я: ' . $order->address->name . '<br>'.
            'Прізвище: '. $order->address->surname . '<br>'.
            'Мобільний телефон: '. $order->address->mobile . '<br>'.
            'Адреса електронної пошти: '. $order->address->email . '<br>'.
            'Область: '. $order->address->region . '<br>'.
            'Адміністративний район: '. $order->address->area . '<br>'.
            'Населений пункт: '. $order->address->city . '<br>'.
            'Відділення Нової Пошти: '. $order->address->post . '<br>';

        $this->mail->Send();
    }

    public function sendResetPassword($user, $password)
    {

        $this->mail->AddAddress($user->email);
        $this->mail->Subject = 'Відновлення паролю';
        $this->mail->Body    = 'Ваш тимчавовий пароль ' . $password;
        $this->mail->Send();

    }



}
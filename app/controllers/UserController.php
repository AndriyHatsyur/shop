<?php

class UserController extends BaseController
{

    public function initialize(){
        
        $this->assets->addCss('css/pages.css');
    }

    public function indexAction()
    {
        $title = "home";
        $this->view->setVar('title', $title);
    }

    public function signupAction()
    {
        $this->view->setVar('title', "Реєстрація");
    }

    public function loginAction()
    {
        $this->view->setVar('title', "Вхід для Клієнтів");
    }

}
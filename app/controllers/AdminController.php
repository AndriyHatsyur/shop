<?php

class AdminController extends BaseController
{

    public function initialize()
    {
        
        $this->assets->addCss('css/admin.css');
    }

    public function indexAction()
    {
        $title = "Адмін панель";
        $this->view->setVar('title', $title);
    }
   
}
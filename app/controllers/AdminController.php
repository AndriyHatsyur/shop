<?php

class AdminController extends AdminBaseController
{

    public function initialize()
    {
        $this->checkLogin();
        $this->assets->addCss('css/admin.css');
  
    }

    public function indexAction()
    {
       
        $title = "Адмін панель";
        $this->view->setVar('title', $title);
    }
   
}
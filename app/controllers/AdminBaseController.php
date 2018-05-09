<?php

use Phalcon\Mvc\Controller;

class AdminBaseController extends Controller
{
    public function initialize()
    {
        $this->checkLogin();
        $this->assets->addCss('css/admin.css');
        $this->view->setTemplateAfter('admin');
  
    }

    public function checkLogin()
    {
        
        if(!$this->session->has('admin')) {
            
            if($this->session->get('admin') != 'andriy') {

                header("Location: /admin/login");	
                die('You are not logged in');

            }

        }
            
    }

   
}
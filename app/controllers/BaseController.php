<?php

use Phalcon\Mvc\Controller;

class BaseController extends Controller
{
    public function initialize()
    {
        $this->checkLogin();
  
    }

    public function checkLogin()
    {
        
        if($this->session->has('user')) {
          
            $user = $this->session->get('user');
            $this->view->setVar('user', $user);
        }
            
    }
   
}
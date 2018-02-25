<?php

use Phalcon\Mvc\Controller;

class BaseController extends Controller
{
    public function initialize()
    {
        $this->checkLogin();
        $this->setCart();
    }

    public function checkLogin()
    {
        
        if($this->session->has('user')) {
          
            $user = $this->session->get('user');
            $this->view->setVar('user', $user);
        }
            
    }

    public function setCart()
    {
        if(!$this->session->get('cart')) {

            $cart =new Cart();
            $this->session->set('cart', $cart);

        }else {
            $cart = $this->session->get('cart');
            $count = $cart->getCount();
            $this->view->setVar('count', $count);
        }

    }


   
}
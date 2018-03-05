<?php

use Phalcon\Mvc\Controller;

class BaseController extends Controller
{
    public function initialize()
    {
        $this->checkLogin();
        $this->setCart();
        $this->randProduct();
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
            $this->view->setVar('count', 0);

        }else {
            $cart = $this->session->get('cart');
            $count = $cart->getCountProducts();
            $this->view->setVar('count', $count);
        }

    }

    public function randProduct()
    {
        $randProducts = Product::find(["stock > 0", 'order' => 'RAND()', 'limit' => 4]);
        $this->view->setVar('randProducts', $randProducts);

    }


   
}
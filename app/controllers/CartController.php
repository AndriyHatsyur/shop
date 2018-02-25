<?php


class CartController extends BaseController
{
    private $cart;

    public function initialize(){
        parent::initialize();
        $this->assets->addCss('css/pages.css');

    }

    public function addAction()
    {
        if ($this->request->isAjax()) {

            $cart = $this->session->get('cart');
            $product_id = $this->request->getPost('product_id');
            $count = $this->request->getPost('count');
            $cart->addProduct($product_id, $count);
            $this->session->set('cart', $cart);
        }
        echo '<pre>';
        var_dump($this->session->get('cart'));
        die();
//
//        $this->dispatcher->forward(
//            [
//                'controller' => 'pages',
//                'action'     => 'route404',
//            ]
//        );

    }
}
<?php


class CartController extends BaseController
{
    private $cart;

    public function initialize(){
        parent::initialize();
        $this->assets->addCss('css/pages.css');
        $this->assets->addCss('css/cart.css');
        $this->cart = $this->session->get('cart');

    }

    public function indexAction()
    {
        $this->view->setVar('title', 'Кошик');

        $products = $this->cart->getProducts();
        $totalSum = $this->cart->getTotalSum();

        $this->view->setVar('products', $products);
        $this->view->setVar('totalSum', $totalSum);

    }

    public function addAction()
    {
        if ($this->request->isAjax()) {

            $product_id = $this->request->getPost('product_id');
            $count = $this->request->getPost('count');
            $product = Product::findFirstById($product_id);
            $this->cart->addProduct($product_id, $product, $count);

        }

        $this->dispatcher->forward(
            [
                'controller' => 'pages',
                'action'     => 'route404',
            ]
        );

    }

    public function deleteAction()
    {
        if ($this->request->isAjax()) {
            $id = $this->request->getPost('id');
            $this->cart->deleteProduct($id);
        }

        return $this->dispatcher->forward([
            'action' => 'index'
        ]);
    }

    public function editAction()
    {
        if ($this->request->isAjax()) {
            $id = $this->request->getPost('id');
            $count = $this->request->getPost('count');
            $product = $this->cart->getProduct($id);
            if ($product)
                $product->changeCount($count);
        }

        return $this->dispatcher->forward([
            'action' => 'index'
        ]);
    }


}
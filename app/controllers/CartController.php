<?php

use \Phalcon\Http\Response;

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
            if ($product->stock >= $count && $product->stock >= $this->cart->getProduct($product_id )->count + $count) {
                $this->cart->addProduct($product_id, $product, $count);
                $message = "Товар додано к кошик";
            } else {

                $message = "На складі доступно лише $product->stock шт";
            }
        }


        $response = new Response();

        $totalCount = $this->cart->getCountProducts();
        $response->setJsonContent(
            [
                "count" => $totalCount,
                'message' => $message,
            ]
        );

        return $response;

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
            $dbProduct = Product::findFirstById($id);
            if ($dbProduct->stock >= $product->count + $count){

                $product->changeCount($count);
            }

        }

        return $this->dispatcher->forward([
            'action' => 'index'
        ]);
    }

    public function sendOrderAction()
    {
        $this->view->title = "Оформити замовлення";

        if ($this->request->isPost()) {

            $address = new Address();
            $address->name = $this->request->getPost('name', "striptags");
            $address->surname = $this->request->getPost('surname', "striptags");
            $address->email = $this->request->getPost('email', "email");
            $address->region = $this->request->getPost('region', "striptags");
            $address->area = $this->request->getPost('area', "striptags");
            $address->city = $this->request->getPost('city', "striptags");
            $address->mobile = $this->request->getPost('mobile', "striptags");
            $address->post = $this->request->getPost('post', "striptags");

            $order = new Order;
            $order->sum = $this->cart->getTotalSum();
            $order->count = $this->cart->getCountProducts();
            $order->address = $address;
            if($this->session->has('user')) {

                $user = $this->session->get('user');
                $order->user = $user->id;
            }

            foreach ($this->cart->getProducts() as $p)
            {
                $product = new OrderProduct();
                $product->count = $p->count;
                $product->link = $p->link;
                $product->image = $p->image;
                $product->title = $p->title;
                $product->price = $p->price;
                $products[] = $product;

                $bdProduct = Product::findFirstById($p->id);
                $bdProduct->stock -= $p->count;
                $bdProduct->save();

            }

            $order->orderProduct = $products;

            if ($order->save())
            {
                $this->session->remove('cart');
                $this->view->alert = 'Дякуємо, ваше замовлення отримано';
            } else {

                $this->view->alert = 'Вибачте сталась помилка спробуйте пізніше';
            }


        }
    }



}
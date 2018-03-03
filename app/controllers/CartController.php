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

            foreach ($this->cart->getProducts() as $p)
            {
                $product = new OrderProduct();
                $product->count = $p->count;
                $product->link = $p->link;
                $product->image = $p->image;
                $product->title = $p->title;
                $product->price = $p->price;
                $products[] = $product;

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
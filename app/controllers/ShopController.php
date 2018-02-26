<?php

use Phalcon\Paginator\Adapter\Model as PaginatorModel;

class ShopController extends BaseController
{

    public function initialize(){
        parent::initialize();
        $this->assets->addCss('css/pages.css');
        $this->assets->addCss('css/shop.css');
        $this->setCategory();
    }

    public function IndexAction()
    {
        $title = "Розпродаж продукції";
        $this->view->setVar('title', $title);
        $products = Product::find('stock > 0');
        $this->paginate($products);

    }

    public function ProductAction()
    {
        $link = trim($this->dispatcher->getParam('link'),'/');
        $product = Product::findFirstByLink($link);
        if(!$product ){
            $this->dispatcher->forward(
                [
                    'controller' => 'pages',
                    'action'     => 'route404',
                ]
            );
        } else {
            $title = $product->title;
            $this->view->setVar('title', $title);
            $this->view->setVar('product', $product);
            $this->assets->addJs('js/count.js');
        }

    }

    public function PageAction()
    {
        echo $this->dispatcher->getParam('page');
        die();
    }

    public function CategoryAction()
    {
        $link = trim($this->dispatcher->getParam('link'),'/');
        $category = Category::findFirstByLink($link);



        if(!$category){
            $this->dispatcher->forward(
                [
                    'controller' => 'pages',
                    'action'     => 'route404',
                ]
            );
        } else {
            $productCategory = ProductCategory::find([
                'category_id = :id:',
                'bind' => [
                    'id' => $category->id,
                ]
            ]);
            $title = $category->name;
            $this->view->setVar('title', $title);
            $this->paginate($productCategory);
        }

    }

    private function setCategory()
    {
        $categories = Category::find();

        $this->view->setVar('categories', $categories);
    }

    private function paginate($products)
    {
        $currentPage = $_GET['page'] ?? 0;

        $paginator = new PaginatorModel(
            [
                'data'  => $products,
                'limit' => 10,
                'page'  => (int)$currentPage,
            ]
        );

        $page = $paginator->getPaginate();


        $this->view->setVar('page', $page);
    }

}
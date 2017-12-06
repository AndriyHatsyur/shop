<?php

use Phalcon\Paginator\Adapter\Model as PaginatorModel;

class AdminProductController extends AdminBaseController
{

    public function indexAction()
    {
        $this->view->setVar('title', "Товари");

        $currentPage = (int) $_GET['page'];
        
        $products = Product::find();

        $paginator = new PaginatorModel(
            [
                'data'  => $products,
                'limit' => 10,
                'page'  => $currentPage,
            ]
        );
        
        $page = $paginator->getPaginate();

        $this->view->setVar('page', $page);
    }
    
    public function addAction()
    {
        
        $this->view->setVar('title', "Додати товар");

        $categories = Category::find();

        $this->view->setVar('categories', $categories);

        if ($this->request->isPost()) {
            $product = new Product();
            $product->title = $this->request->getPost('name');
            $product->description = $this->request->getPost('description');
            $product->price = $this->request->getPost('price');
            $product->sale = $this->request->getPost('sale');
            $product->stock = $this->request->getPost('stock');
            $product->link = TranslitConverter::toTranslit($product->title);
 
            if ($this->request->hasFiles()) {
                $files = $this->request->getUploadedFiles();

                $img = new Images($files[0]);
                $img->save();
                $product->image = $img->getLink();

                if ($product->save()) {
 
                    $categories = $this->request->getPost('categories');

                    foreach ($categories as $category) {

                        $productCategory = new ProductCategory();
                        $productCategory->product_id = $product->id;
                        $productCategory->category_id = $category;
                        $productCategory->save();
                    }
                    
                    $alert = 'Твар додано';

                } else {

                    $alert = 'При дованні товару виникла помилка';
                }
                
            }
        }     
            
        $this->view->setVar('alert', $alert);
    }


    public function editAction()
    {
        $this->view->setVar('title', "Редагувати товар");

        $id = $this->dispatcher->getParam('id');

        if ($this->request->isPost()) {
            $product = Product::findFirstById($id);
            $product->title = $this->request->getPost('name');
            $product->description = $this->request->getPost('description');
            $product->price = $this->request->getPost('price');
            $product->sale = $this->request->getPost('sale');
            $product->stock = $this->request->getPost('stock');
            $product->link = TranslitConverter::toTranslit($product->title);
 
            if ($this->request->hasFiles() == true) {
                
                $files = $this->request->getUploadedFiles();

                if ($files[0]->getSize() > 0) {
                    Images::delete($product->image);
                    $img = new Images($files[0]);
                    $img->save();
                    $product->image = $img->getLink();
                }

            }

            if ($product->save()) {

                foreach ($product->productCategory as $productCategory) {
                        
                    $productCategory->delete();
                }
 
                $categories = $this->request->getPost('categories');

                foreach ($categories as $category) {

                    $productCategory = new ProductCategory();
                    $productCategory->product_id = $product->id;
                    $productCategory->category_id = $category;
                    $productCategory->save();
                }
                    
                $alert = 'Твар редаговано';

            } else {

                $alert = 'При редагуванні товару виникла помилка';
            }
                 
        } 

        $product = Product::findFirstById($id);
        $categories = Category::find();
        $this->view->setVar('alert', $alert);
        $this->view->setVar('product', $product);
        $this->view->setVar('categories', $categories);
    }


    public function deleteAction()
    {
        if ($this->request->isAjax()) {
            $id= $this->request->getPost('id');
            $product = Product::findFirstById($id);
            Images::delete($product->image);
            $product->delete();

            foreach ($product->productCategory as $productCategory) {
                
                $productCategory->delete();
            }

            $alert = 'Товар видалено';
            $this->view->setVar('alert', $alert);
        }

        return $this->dispatcher->forward([
            'action' => 'index'
        ]);
    }
}
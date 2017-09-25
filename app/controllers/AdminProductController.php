<?php

class AdminProductController extends BaseController
{

    public function initialize()
    {
        
        $this->assets->addCss('css/admin.css');
        $this->view->setTemplateAfter('admin');
    }


    public function indexAction()
    {
        $this->view->setVar('title', "Товари");

        if ($this->request->isAjax()) {
            $id= $this->request->getPost('id');
            $product = Product::findFirst($id);
            $product->delete();

            foreach ($product->productCategory as $productCategory) {
                
                $productCategory->delete();
            }

            $alert = 'Товар видалено';
            $this->view->setVar('alert', $alert);
        }

        $products = Product::find();

        $this->view->setVar('products', $products);
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
            $product->link = TranslitConverter::toTranslit($product->title);

            $files = $this->request->getUploadedFiles();
 
            if ($this->request->hasFiles() == true) {
                $dir =  $_SERVER['DOCUMENT_ROOT'] . 'public/img/product/' ;

                foreach ($this->request->getUploadedFiles() as $file) {
                    $product->image = $dir . $file->getName();
                    
                }

                if ($product->save()) {

                    $file->moveTo($product->image);

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

   
}
<?php

class AdminCategoryController extends BaseController
{

    public function initialize()
    {
        
        $this->assets->addCss('css/admin.css');
        $this->view->setTemplateAfter('admin');
    }


    public function indexAction()
    {
        $this->view->setVar('title', "Категорії");

        

        $categories = Category::find();

        $this->view->setVar('categories', $categories);
    }


    public function addAction()
    {
        $this->view->setVar('title', "Додати категорію");

        if ($this->request->isPost()) {
            $category = new Category($_POST);

            if ($category->save()) {
                
                $alert = 'Категорію додано';
            } else {

                $alert = 'При дадаванні категорії виникла помилка';
            }
            
            $this->view->setVar('alert', $alert);
        }
    }


    public function editAction()
    {

        $this->view->setVar('title', "Редагувати категорію");

        $id = $this->dispatcher->getParam('id');

        $category = Category::findFirst($id);

        $this->view->setVar('category', $category);

        if ($this->request->isPost()) {
          
            $category->name = $this->request->getPost('name');
            $category->number = $this->request->getPost('number');

            if ($category->save()) {
                
                $alert = 'Категорію редаговано';
            } else {

                $alert = 'При редагуванні виникла помилка';
            }
            
            $this->view->setVar('alert', $alert);
        }
    }

    public function deleteAction()
    {
        if ($this->request->isAjax()) {
            $id= $this->request->getPost('id');
            $category = Category::findFirst($id);
            foreach($category->productCategory as $prCat) {
                $prCat->delete();
            }
            $category->delete();
            $alert = 'Категорію видалено';
            $this->view->setVar('alert', $alert);
        }

        return $this->dispatcher->forward([
            'action' => 'index'
        ]);
    }

    
}

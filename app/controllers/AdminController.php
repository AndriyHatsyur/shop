<?php

class AdminController extends BaseController
{

    public function initialize()
    {
        
        $this->assets->addCss('css/admin.css');
        
    }

    public function indexAction()
    {
        $title = "Адмін панель";
        $this->view->setVar('title', $title);
    }


    public function categoryAction()
    {
        $title = "Категорії";
        $this->view->setVar('title', $title);

        if ($this->request->isAjax()) 
        {
            $id= $this->request->getPost('id');
            $category = Category::findFirst($id);
            $category->delete();
            $alert = 'Категорію видалено';
            $this->view->setVar('alert', $alert);
        }

        $categories = Category::find();

        $this->view->setVar('categories', $categories);
    }

    public function categoryAddAction()
    {
        $title = "Додати категорію";
        $this->view->setVar('title', $title);

        if ($this->request->isPost())
        {
          
            $category = new Category;
            $category->name = $this->request->getPost('name');
            $category->number = $this->request->getPost('number');
            $category->save();
            $alert = 'Категорію додано';
            $this->view->setVar('alert', $alert);
        }
    }

    public function categoryEditAction()
    {
        $title = "Редагувати категорію";
        $this->view->setVar('title', $title);

        $id = $this->dispatcher->getParam('id');

        $category = Category::findFirst($id);

        $this->view->setVar('category', $category);

        if ($this->request->isPost())
        {
          
            $category->name = $this->request->getPost('name');
            $category->number = $this->request->getPost('number');
            $category->save();
            $alert = 'Категорію редаговано';
            $this->view->setVar('alert', $alert);
        }
    }
   
}
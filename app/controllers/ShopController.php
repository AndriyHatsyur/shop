<?php

class ShopController extends BaseController
{

    public function initialize(){
        parent::initialize();
        $this->assets->addCss('css/pages.css');
        $this->assets->addCss('css/shop.css');
    }

    public function IndexAction()
    {
        $title = "Розпродаж продукції";
        $this->view->setVar('title', $title);
    }

    public function ProductAction()
    {
        $id = $this->dispatcher->getParam('link');
        $this->assets->addJs('js/count.js');


    }

}
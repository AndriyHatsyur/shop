<?php

class PagesController extends BaseController
{
    public function initialize(){

        $this->assets->addCss('css/pages.css');
    }
    public function indexAction()
    {
    	$title = "home";
        $this->view->setVar('title', $title);
    }

    public function contactAction()
    {
        $title = "contact";
        $this->view->setVar('title', $title);
    }

    public function statuPredstavnukomAction()
    {
        $title = "Стати прндставником";
        $this->view->setVar('title', $title);
    }

    public function route404Action()
    {
    	echo "page not found";
    }

   
}
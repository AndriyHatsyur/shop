<?php

class PagesController extends BaseController
{
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

    public function route404Action()
    {
    	echo "page not found";
    }

   
}
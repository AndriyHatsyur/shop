<?php

class IndexController extends BaseController
{
    public function indexAction()
    {
    	echo "home";

    	

    }

    public function testAction()
    {
    	$tovar = new Tovar;
    	$tovar->name = "tester";
    	$tovar->price = 223.4466;
    	$tovar->save();
    }

    public function route404Action()
    {
    	echo "page not found";
    }
   
}
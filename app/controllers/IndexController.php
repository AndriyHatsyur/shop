<?php

class IndexController extends BaseController
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

    public function installAction()
    {

    	$install = new InstallDB($this->db);

    	$install->run();

    	$password = "777";  
        
    	$admin = new Admin();

    	$admin->login = "andriy"; 

    	$admin ->password = $this->security->hash($password);

        $admin ->save();
		
    }
   
}
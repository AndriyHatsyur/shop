<?php

class IndexController extends BaseController
{
    public function indexAction()
    {
    	echo "home";

    	
    }

    public function testAction()
    {
    	echo "login";
    }

    public function route404Action()
    {
    	echo "page not found";
    }

    public function installAction()
    {

    	$install = new InstallDB($this->db);

    	$install->run();

    	$password = "777";  //$this->request->getPost('password');

    	$admin = new Admin();

    	$admin->login = "andriy";  //$this->request->getPost('login');

    	$admin ->password = $this->security->hash($password);

        $admin ->save();
		
    }
   
}
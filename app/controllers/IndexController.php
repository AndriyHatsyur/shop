<?php

use Phalcon\Mvc\Controller;

class IndexController extends Controller
{
    
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
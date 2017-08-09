<?php

class IndexController extends BaseController
{
    public function indexAction()
    {
    	echo "home";

        $test = TranslitConverter::toTranslit("Шампунь-гель\" для душу для чоловіків «Заряд свіжості» (500 мл)");
        echo "<br>$test";

        $cat = new Category();
       
       $t = Tovar::findFirst();

      echo "<br>$t->title;";

       foreach ($t->tovarCategory as $cat) {

            echo "<br>" . $cat->category->name;
        } 



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

    	$password = "777";  
        
    	$admin = new Admin();

    	$admin->login = "andriy"; 

    	$admin ->password = $this->security->hash($password);

        $admin ->save();
		
    }
   
}
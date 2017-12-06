<?php

use Phalcon\Mvc\Controller;

class SessionController extends Controller
{

    public function initialize()
    {
        $this->assets->addCss('css/admin.css');
    }
    public function indexAction(){}


    public function loginAction()
    {
        $title = "Вхід адмін панель";
        $this->view->setVar('title', $title);
       
        if ($this->request->isPost()) {

            $login    = $this->request->getPost('login');
            $password = $this->request->getPost('password');
    
            $admin = Admin::findFirstByLogin($login);
            if ($admin) {
                if ($this->security->checkHash($password, $admin->password)) {
                    $this->session->set('admin', 'andriy');
                    header("Location: /admin");
                }else {
                    $error = 'Не вірний логін або пароль';
                    $this->view->setVar('error', $error);
                }
            } else {
                $error = 'Не вірний логін або пароль';
                $this->view->setVar('error', $error);
                $this->security->hash(rand());
            }
        }
    }

    public function logoutAction()
    {
        $this->session->destroy();
        header("Location: /admin/login");
    }
   
}
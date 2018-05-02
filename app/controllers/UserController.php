<?php

class UserController extends BaseController
{

    public function initialize(){
        parent::initialize();
        $this->assets->addCss('css/pages.css');
    }

    public function indexAction()
    {
        $this->checkUserLogin();
        $title = "home";
        $this->view->setVar('title', $title);
    }

    public function signupAction()
    {
        $this->view->setVar('title', "Реєстрація");

        if ($this->request->isPost()) {
            $user = new User;
            $user->name = $this->request->getPost('name', "striptags");
            $user->email = $this->request->getPost('email', "email");
            $password = $this->request->getPost('password', "striptags");
            $user->password = $this->security->hash($password);

            if($user->save()) {
        
                $this->view->setVar('message', "Ви успішно зареєстровані, тепер ви можете увійтти у ваш кабінет");
            } else {
                $this->view->setVar('errors', $user->getMessages());
                
            }
            
        }
    }

    public function loginAction()
    {
        $this->view->setVar('title', "Вхід для Клієнтів");

        if ($this->request->isPost()) {
            $email = $this->request->getPost('email', "striptags");
            $password = $this->request->getPost('password', "striptags");

            $user = User::findFirstByEmail($email);

            if ($user) {
                if ($this->security->checkHash($password, $user->password)) {
                    $this->session->set('user', $user);
                    header("Location: /user");
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
        $this->session->remove('user');
        header("Location: /");
    }

    public function changePasswordAction()
    {
        $this->view->setVar('title', "Змінити пароль");
        if ($this->request->isPost()) {

            $password = $this->request->getPost('password', "striptags");
            $newPassword = $this->request->getPost('newpassword', "striptags");
            $repeatPassword = $this->request->getPost('repeatpassword', "striptags");

            $user = $this->session->get('user');

            $userDb = User::findFirstByEmail($user->email);

            if ($this->security->checkHash($password, $userDb->password)) {

                if($newPassword == $repeatPassword) {
                    $userDb->password = $this->security->hash($newPassword);
                    if ($userDb->save())
                        $this->view->setVar('message', "Пароль успішно змінено");

                }else {
                    $error = 'Паролі не співпадають';
                    $this->view->setVar('error', $error);
                }

            } else {
                $error = 'Не вірний пароль';
                $this->view->setVar('error', $error);
            }


        }
    }

    public function checkUserLogin()
    {

        if (!$this->session->has('user')) {

            header("Location: /login");
            die('You are not logged in');

        }
    }
}
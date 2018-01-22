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

        if ($this->request->isPost()) {


            $message = new Message($_POST);
            $message->name = $this->request->getPost('name', "striptags");
            $message->mobile = $this->request->getPost('mobile', "striptags");
            $message->text = $this->request->getPost('text', "striptags");

            if ($message->save()) {
                
                $alert = 'Дякуємо ваше повідомлення віправлено, найближчим часом ми звами зв`жемось';
            } else {

                $alert = 'Вибачте сталася помилка, спробуйте пізніше';
            }
            
            $this->view->setVar('alert', $alert);
        }

    }

    public function statyPredstavnykomAction()
    {
        $this->view->title = "Стати прндставником";

        if ($this->request->isPost()) {

            $representative = new Representative();
            $representative->name = $this->request->getPost('name', "striptags");
            $representative->surname = $this->request->getPost('surname', "striptags");
            $representative->birth = $this->request->getPost('birth', "striptags");
            $representative->email = $this->request->getPost('email', "email");
            $representative->region = $this->request->getPost('region', "striptags");
            $representative->area = $this->request->getPost('area', "striptags");
            $representative->city = $this->request->getPost('city', "striptags");
            $representative->mobile = $this->request->getPost('mobile', "striptags");
            if ($representative->save()) {
                
                $alert = 'Дякуємо вашу заявку віправлено, найближчим часом ми з вами зв`жемось';
            } else {

                $alert = 'Вибачте сталася помилка, спробуйте пізніше';
            }
            
            $this->view->setVar('alert', $alert);
        }
    }

    public function route404Action()
    {
    	echo "page not found";
    }

   
}
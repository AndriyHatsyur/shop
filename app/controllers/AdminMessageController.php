<?php

class AdminMessageController extends AdminBaseController
{

    public function indexAction()
    {

        $this->view->setVar('title', "Повідомлення");

        $messages = Message::find(['order' => 'id DESC']);
        
        $this->view->setVar('messages', $messages);
    }


    public function deleteAction()
    {
        if ($this->request->isAjax()) {
            $id= $this->request->getPost('id');
            $message = Message::findFirstById($id);
            $message->delete();
            $alert = 'Повідомлення видалено';
            $this->view->setVar('alert', $alert);
        }

        return $this->dispatcher->forward([
            'action' => 'index'
        ]);
    }

    public function viewAction()
    {
        $id = $this->dispatcher->getParam('id');
        
        $message = Message::findFirstById($id);

        $this->view->setVar('title', "Повідомлення від $message->name");
        


        if(!$message){
            header("Location: /page-not-found");
        }

        $message->status = "old";
        $message->save();

        $this->view->setVar('message', $message);
    }

    
}

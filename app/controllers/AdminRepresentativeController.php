<?php

class AdminrepResentativeController extends AdminBaseController
{

    public function indexAction()
    {

        $this->view->setVar('title', "Заявки на реєстрацію");

        $representatives = Representative::find(['order' => 'id DESC']);
        
        $this->view->setVar('representatives', $representatives);
    }

    public function deleteAction()
    {
        if ($this->request->isAjax()) {
            $id= $this->request->getPost('id');
            $representative = Representative::findFirstById($id);
            $representative->delete();
            $alert = 'Заявку видалено';
            $this->view->setVar('alert', $alert);
        }

        return $this->dispatcher->forward([
            'action' => 'index'
        ]);
    }

    public function viewAction()
    {
        $id = $this->dispatcher->getParam('id');
        
        $representative = Representative::findFirstById($id);

        $this->view->setVar('title', "Заявки на реєстрацію від $representative->surname");

        if(!$representative){
            header("Location: /page-not-found");
        }

        $representative->status = "old";
        $representative->save();

        $this->view->setVar('representative', $representative);
    }

    
}
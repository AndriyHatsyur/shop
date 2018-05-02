<?php
/**
 * Created by PhpStorm.
 * User: andriy
 * Date: 18.04.18
 * Time: 22:24
 */
use Phalcon\Paginator\Adapter\Model as PaginatorModel;

class AdminOrderController extends AdminBaseController
{
    public function indexAction()
    {

        $title = "Замовлення";
        $this->view->setVar('title', $title);
        $currentPage = (int) $_GET['page'];
        $orders = Order::find(['order' => 'id DESC']);
        $paginator = new PaginatorModel(
            [
                'data'  => $orders,
                'limit' => 5,
                'page'  => $currentPage,
            ]
        );

        $page = $paginator->getPaginate();

        $this->view->setVar('page', $page);


    }

    public function orderAction()
    {
        $id = $this->dispatcher->getParam('id');

        $order = Order::findFirstById($id);

        $order->id_ = str_pad($order->id,5,0,STR_PAD_LEFT);

        $this->view->setVar('title', "Замовлення № $order->id_");



        if(!$order){
            header("Location: /page-not-found");
        }

        $this->view->setVar('order', $order);

        if ($this->request->isPost()) {

            $order->status = $this->request->getPost('status');

            $order->save();
    }   }


}
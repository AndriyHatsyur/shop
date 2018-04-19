<?php
/**
 * Created by PhpStorm.
 * User: andriy
 * Date: 18.04.18
 * Time: 22:24
 */

class AdminOrderController extends AdminBaseController
{
    public function indexAction()
    {

        $title = "Замовлення";
        $this->view->setVar('title', $title);

        $orders = Order::find();
        $this->view->setVar('orders', $orders);

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
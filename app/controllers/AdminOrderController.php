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

}
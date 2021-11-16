<?php

namespace patterns\Observer;

class OrderManager
{
    protected $userNotificator;

    public function createOrder($data)
    {
        // order was creating successfully

        $this->userNotificator->sendNofication($data);
    }

    public function updateOrder()
    {
        // TODO
    }
}
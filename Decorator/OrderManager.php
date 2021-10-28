<?php


namespace patterns\Decorator;


class OrderManager
{
    protected $emailSender;

    public function __construct(SendNotificationInterface $emailSender)
    {
        $this->emailSender = $emailSender;
    }

    public function createOrder(array $data)
    {
        // Сохранение заказа

        $this->emailSender->sendNotification();
    }
}
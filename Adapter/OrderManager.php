<?php


namespace patterns\Adapter;


class OrderManager
{
    protected $emailSender;

    public function __construct(SendEmailInterface $emailSender)
    {
        $this->emailSender = $emailSender;
    }

    public function createOrder(array $data)
    {
        // Сохранение заказа

        $this->emailSender->sendEmail($data['to'], 'Ваш заказ успешно создан');
    }
}
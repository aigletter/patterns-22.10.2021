<?php

namespace patterns\Decorator;

class TelegramNotificatorDecorator implements SendNotificationInterface
{
    protected $component;

    public function __construct(SendNotificationInterface $component)
    {
        $this->component = $component;
    }

    public function sendNotification()
    {
        $this->component->sendNotification();

        echo 'Sent telegram notification' . PHP_EOL;
    }
}
<?php

namespace patterns\Decorator;


class SmsNotificator implements \patterns\Decorator\SendNotificationInterface
{
    protected $component;

    public function __construct(SendNotificationInterface $component)
    {
        $this->component = $component;
    }

    public function sendNotification()
    {
        $this->component->sendNotification();

        echo "Sent sms" . PHP_EOL;
    }
}
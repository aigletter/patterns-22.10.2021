<?php

namespace patterns\Decorator;


class EmailNotificator implements SendNotificationInterface
{
    public function sendNotification()
    {
        echo 'Email was sent successfully' . PHP_EOL;
    }
}
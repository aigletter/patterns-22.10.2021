<?php

include __DIR__ . '/../../vendor/autoload.php';

$notificator = new \patterns\Decorator\EmailNotificator();
$notificator = new \patterns\Decorator\TelegramNotificatorDecorator($notificator);
$notificator = new \patterns\Decorator\SmsNotificator($notificator);

$manager = new \patterns\Decorator\OrderManager($notificator);

$manager->createOrder([
    'to' => 'ivan@gmail.com'
]);

exit();
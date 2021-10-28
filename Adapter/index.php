<?php

include __DIR__ . '/../../vendor/autoload.php';

//$emailSender = new \patterns\Adapter\EmailSender();
$emailSender = new \PHPMailer\PHPMailer\PHPMailer();
$adapter = new \patterns\Adapter\EmailSenderAdapter($emailSender);
$manager = new \patterns\Adapter\OrderManager($adapter);

$manager->createOrder([
    'to' => 'ivan@gmail.com'
]);

exit();
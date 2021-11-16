<?php

include dirname(__DIR__, 2) . '/vendor/autoload.php';

$order = new \patterns\Observer\Order();

$emailSender = new \patterns\Observer\EmailSender();
$order->attach($emailSender);

$dbSAver = new \patterns\Observer\DbSaver();
$order->attach($dbSAver);

$order->changeStatus('paid');

$order->detach($dbSAver);

$order->changeStatus('done');


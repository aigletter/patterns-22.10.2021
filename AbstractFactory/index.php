<?php

use patterns\AbstractFactory\AbstractFactoryInterface;

include __DIR__ . '/../../vendor/autoload.php';

function shopManager(AbstractFactoryInterface $factory)
{
    $product = $factory->createProduct();
    $order = $factory->createOrder();
    $order->addProduct($product);
    echo $order->calculateSum();
}

$factory1 = new \patterns\AbstractFactory\RealFactory();
shopManager($factory1);

$factory2 = new \patterns\AbstractFactory\VirtualFactory();
shopManager($factory2);
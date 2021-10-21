<?php

use patterns\FactoryMethod\AudiFactory;
use patterns\FactoryMethod\CarFactoryAbstract;
use patterns\FactoryMethod\FordFactory;

include __DIR__ . '/../../vendor/autoload.php';

function manageCar(CarFactoryAbstract $factory)
{
    $car = $factory->createInstance();
    echo $car->move() . PHP_EOL;
}

$factory1 = new FordFactory();
manageCar($factory1);

$factory2 = new AudiFactory();
manageCar($factory2);
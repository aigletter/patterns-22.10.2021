<?php

include __DIR__ . '/../../vendor/autoload.php';

/*$car = new \patterns\Builder\Car(
    'lux',
    null,
    null,
    false,
    true
);*/
$buider = new patterns\Builder\CarBuilder();
/*$buider->setEngine('test');
$buider->setAudio(true);
$buider->build();*/
$buider->setEngine('Test')
    ->setAudio(true)
    ->setClimatControll('lux');

if (isset($_GET['cruise'])) {
    $buider->setCruiseControll($_GET['cruise']);
}

$car = $buider->build();

echo $car->move();
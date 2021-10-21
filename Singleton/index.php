<?php

include __DIR__ . '/../../vendor/autoload.php';

//$db = new \patterns\Singleton\Db();

$db1 = \patterns\Singleton\Db::getInstance();

$db2 = \patterns\Singleton\Db::getInstance();

$db3 = \patterns\Singleton\Db::getInstance();


exit();
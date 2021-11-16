<?php


namespace patterns\Observer;


use SplSubject;

class DbSaver implements \SplObserver
{
    public function update(SplSubject $subject)
    {
        echo 'DbSaver сделал работу по событию изменения статуса заказа на ' . $subject->getStatus() . PHP_EOL;
    }
}
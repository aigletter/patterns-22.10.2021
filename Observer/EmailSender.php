<?php

namespace patterns\Observer;

use SplObserver;
use SplSubject;

class EmailSender implements SplObserver
{
    public function update(SplSubject $subject)
    {
        echo 'EmailSender отреагировал на событие изменения статуса заказа на ' . $subject->getStatus() . PHP_EOL;
    }
}
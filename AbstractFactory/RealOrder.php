<?php


namespace patterns\AbstractFactory;


class RealOrder extends OrderAbstract
{
    public function calculateSum()
    {
        return 'I am real order' . PHP_EOL;
    }
}
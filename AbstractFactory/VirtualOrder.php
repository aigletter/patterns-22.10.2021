<?php

namespace patterns\AbstractFactory;

class VirtualOrder extends OrderAbstract
{
    public function calculateSum()
    {
        return 'I am virtual order' . PHP_EOL;
    }
}
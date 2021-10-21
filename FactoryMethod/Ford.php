<?php

namespace patterns\FactoryMethod;


class Ford implements CarInterface
{
    public function move()
    {
        return 'I am Form';
    }
}
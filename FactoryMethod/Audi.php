<?php


namespace patterns\FactoryMethod;


class Audi implements CarInterface
{
    public function move()
    {
        return 'I am AUDI';
    }
}
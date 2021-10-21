<?php


namespace patterns\FactoryMethod;


class AudiFactory extends CarFactoryAbstract
{
    protected function createConcrete(): CarInterface
    {
        return new Audi();
    }
}
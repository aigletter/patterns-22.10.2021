<?php

namespace patterns\FactoryMethod;

class FordFactory extends CarFactoryAbstract
{
    protected function createConcrete(): CarInterface
    {
        return new Ford();
    }
}
<?php


namespace patterns\FactoryMethod;


abstract class CarFactoryAbstract
{
    public function createInstance(): CarInterface
    {
        return $this->createConcrete();
    }

    abstract protected function createConcrete(): CarInterface;
}
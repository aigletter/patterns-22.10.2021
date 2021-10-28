<?php


namespace patterns\AbstractFactory;


class RealProduct implements ProductInterface
{
    public function getPrice()
    {
        return 100;
    }
}
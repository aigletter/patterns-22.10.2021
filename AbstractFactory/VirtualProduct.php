<?php


namespace patterns\AbstractFactory;


class VirtualProduct implements ProductInterface
{
    public function getPrice()
    {
        return 50;
    }
}
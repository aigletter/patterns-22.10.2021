<?php


namespace patterns\AbstractFactory;


class RealFactory implements AbstractFactoryInterface
{
    public function createProduct(): ProductInterface
    {
        return new RealProduct();
    }

    public function createOrder(): OrderInterface
    {
        return new RealOrder();
    }
}
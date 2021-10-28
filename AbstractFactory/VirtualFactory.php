<?php

namespace patterns\AbstractFactory;


class VirtualFactory implements AbstractFactoryInterface
{
    public function createProduct(): ProductInterface
    {
        return new VirtualProduct();
    }

    public function createOrder(): OrderInterface
    {
        return new VirtualOrder();
    }
}
<?php

namespace patterns\AbstractFactory;


abstract class OrderAbstract implements OrderInterface
{
    protected $products = [];

    public function addProduct(ProductInterface $product)
    {
        $this->products[] = $product;
    }
}
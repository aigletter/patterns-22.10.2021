<?php


namespace patterns\AbstractFactory;


interface OrderInterface
{
    public function calculateSum();

    public function addProduct(ProductInterface $product);
}
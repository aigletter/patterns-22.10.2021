<?php


namespace patterns\AbstractFactory;


interface AbstractFactoryInterface
{
    public function createProduct(): ProductInterface;

    public function createOrder(): OrderInterface;
}
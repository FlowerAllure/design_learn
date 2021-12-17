<?php


namespace Flowerallure\PhpunitLearn\FactoryMethod;


abstract class Creator
{
    abstract public function factoryMethod(): Product;

    public function someOperation(): string
    {
        $product = $this->factoryMethod();

        return $product->operation();
    }
}

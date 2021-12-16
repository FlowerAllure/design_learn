<?php


namespace Flowerallure\PhpunitLearn\FactoryMethod\ConcreteCreator;

use Flowerallure\PhpunitLearn\FactoryMethod\ConcreteProduct\ConcreteProduct1;
use Flowerallure\PhpunitLearn\FactoryMethod\Creator;
use Flowerallure\PhpunitLearn\FactoryMethod\Product;

class ConcreteCreator1 extends Creator
{
    public function factoryMethod(): Product
    {
        return new ConcreteProduct1();
    }
}

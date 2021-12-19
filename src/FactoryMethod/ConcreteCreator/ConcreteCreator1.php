<?php


namespace Flowerallure\DesignLearn\FactoryMethod\ConcreteCreator;

use Flowerallure\DesignLearn\FactoryMethod\ConcreteProduct\ConcreteProduct1;
use Flowerallure\DesignLearn\FactoryMethod\Creator;
use Flowerallure\DesignLearn\FactoryMethod\Product;

class ConcreteCreator1 extends Creator
{
    public function factoryMethod(): Product
    {
        return new ConcreteProduct1();
    }
}

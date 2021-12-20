<?php

namespace Flowerallure\DesignLearn\FactoryMethod\ConcreteCreator;

use Flowerallure\DesignLearn\FactoryMethod\ConcreteProduct\ConcreteProduct2;
use Flowerallure\DesignLearn\FactoryMethod\Creator;
use Flowerallure\DesignLearn\FactoryMethod\Product;

class ConcreteCreator2 extends Creator
{
    public function factoryMethod(): Product
    {
        return new ConcreteProduct2();
    }
}

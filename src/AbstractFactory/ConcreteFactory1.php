<?php


namespace Flowerallure\PhpunitLearn\AbstractFactory;


use Flowerallure\PhpunitLearn\AbstractFactory\Factory\AbstractFactory;
use Flowerallure\PhpunitLearn\AbstractFactory\Product\AbstractProductA;
use Flowerallure\PhpunitLearn\AbstractFactory\Product\AbstractProductB;

class ConcreteFactory1 implements AbstractFactory
{

    public function createProductA(): AbstractProductA
    {
        return new ConcreteProductA1();
    }

    public function createProductB(): AbstractProductB
    {
        return new ConcreteProductB1();
    }
}

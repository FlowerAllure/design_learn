<?php


namespace Flowerallure\PhpunitLearn\AbstractFactory\Factory;


use Flowerallure\PhpunitLearn\AbstractFactory\AbstractFactory;
use Flowerallure\PhpunitLearn\AbstractFactory\AbstractProductA;
use Flowerallure\PhpunitLearn\AbstractFactory\AbstractProductB;
use Flowerallure\PhpunitLearn\AbstractFactory\ConcreteProductA\ConcreteProductA2;
use Flowerallure\PhpunitLearn\AbstractFactory\ConcreteProductB\ConcreteProductB2;

class ConcreteFactory2 implements AbstractFactory
{

    public function createProductA(): AbstractProductA
    {
        return new ConcreteProductA2();
    }

    public function createProductB(): AbstractProductB
    {
        return new ConcreteProductB2();
    }
}

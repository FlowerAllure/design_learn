<?php


namespace Flowerallure\PhpunitLearn\AbstractFactory\Factory;


use Flowerallure\PhpunitLearn\AbstractFactory\AbstractFactory;
use Flowerallure\PhpunitLearn\AbstractFactory\AbstractProductA;
use Flowerallure\PhpunitLearn\AbstractFactory\AbstractProductB;
use Flowerallure\PhpunitLearn\AbstractFactory\ConcreteProductA\ConcreteProductA1;
use Flowerallure\PhpunitLearn\AbstractFactory\ConcreteProductB\ConcreteProductB1;

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

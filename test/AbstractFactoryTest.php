<?php

use Flowerallure\PhpunitLearn\AbstractFactory\AbstractFactory;
use Flowerallure\PhpunitLearn\AbstractFactory\Factory\ConcreteFactory1;
use Flowerallure\PhpunitLearn\AbstractFactory\Factory\ConcreteFactory2;

require '../vendor/autoload.php';

function clientCode(AbstractFactory $factory)
{
    $productA = $factory->createProductA();
    $productB = $factory->createProductB();

    echo $productB->usefulFunctionB();
    echo $productB->anotherUsefulFunctionB($productA);
}


clientCode(new ConcreteFactory1());
clientCode(new ConcreteFactory2());

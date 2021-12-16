<?php

use Flowerallure\PhpunitLearn\AbstractFactory\ConcreteFactory1;
use Flowerallure\PhpunitLearn\AbstractFactory\Factory\AbstractFactory;

require '../vendor/autoload.php';


function clientCode(AbstractFactory $factory)
{
    $productA = $factory->createProductA();
    $productB = $factory->createProductB();

    echo $productB->usefulFunctionB();
    echo $productB->anotherUsefulFunctionB($productA);
}


clientCode(new ConcreteFactory1());

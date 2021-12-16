<?php

use Flowerallure\PhpunitLearn\FactoryMethod\ConcreteCreator\ConcreteCreator1;
use Flowerallure\PhpunitLearn\FactoryMethod\ConcreteCreator\ConcreteCreator2;
use Flowerallure\PhpunitLearn\FactoryMethod\Creator;

require '../vendor/autoload.php';

function clientCode(Creator $creator)
{
    echo $creator->someOperation() . PHP_EOL;
}

clientCode(new ConcreteCreator1());

clientCode(new ConcreteCreator2());

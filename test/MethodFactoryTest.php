<?php

use Flowerallure\DesignLearn\FactoryMethod\ConcreteCreator\ConcreteCreator1;
use Flowerallure\DesignLearn\FactoryMethod\ConcreteCreator\ConcreteCreator2;
use Flowerallure\DesignLearn\FactoryMethod\Creator;

require '../vendor/autoload.php';

function clientCode(Creator $creator)
{
    echo $creator->someOperation() . PHP_EOL;
}

clientCode(new ConcreteCreator1());

clientCode(new ConcreteCreator2());

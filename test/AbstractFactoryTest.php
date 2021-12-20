<?php

/*
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

use Flowerallure\DesignLearn\AbstractFactory\AbstractFactory;
use Flowerallure\DesignLearn\AbstractFactory\Factory\ConcreteFactory1;

require '../vendor/autoload.php';

function clientCode(AbstractFactory $factory)
{
    $productA = $factory->createProductA();
    $productB = $factory->createProductB();

    echo $productB->usefulFunctionB();
    echo $productB->anotherUsefulFunctionB($productA);
}

clientCode(new ConcreteFactory1());
clientCode(new \Flowerallure\DesignLearn\AbstractFactory\Factory\ConcreteFactory2());

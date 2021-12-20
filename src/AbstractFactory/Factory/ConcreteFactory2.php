<?php

/*
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Flowerallure\DesignLearn\AbstractFactory\Factory;

use Flowerallure\DesignLearn\AbstractFactory\AbstractFactory;
use Flowerallure\DesignLearn\AbstractFactory\AbstractProductA;
use Flowerallure\DesignLearn\AbstractFactory\AbstractProductB;
use Flowerallure\DesignLearn\AbstractFactory\ConcreteProductA\ConcreteProductA2;
use Flowerallure\DesignLearn\AbstractFactory\ConcreteProductB\ConcreteProductB2;

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

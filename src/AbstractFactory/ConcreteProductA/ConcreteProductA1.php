<?php

/*
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Flowerallure\DesignLearn\AbstractFactory\ConcreteProductA;

use Flowerallure\DesignLearn\AbstractFactory\AbstractProductA;

class ConcreteProductA1 implements AbstractProductA
{
    public function usefulFunctionA(): string
    {
        return 'The result of the product A1';
    }
}

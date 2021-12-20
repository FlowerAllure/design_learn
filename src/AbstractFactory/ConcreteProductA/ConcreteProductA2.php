<?php

namespace Flowerallure\DesignLearn\AbstractFactory\ConcreteProductA;

use Flowerallure\DesignLearn\AbstractFactory\AbstractProductA;

class ConcreteProductA2 implements AbstractProductA
{
    public function usefulFunctionA(): string
    {
        return 'The result of the product A2';
    }
}

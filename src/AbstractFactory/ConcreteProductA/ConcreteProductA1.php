<?php


namespace Flowerallure\PhpunitLearn\AbstractFactory\ConcreteProductA;


use Flowerallure\PhpunitLearn\AbstractFactory\AbstractProductA;

class ConcreteProductA1 implements AbstractProductA
{

    public function usefulFunctionA(): string
    {
        return "The result of the product A1";
    }
}

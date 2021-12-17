<?php


namespace Flowerallure\PhpunitLearn\AbstractFactory\ConcreteProductA;


use Flowerallure\PhpunitLearn\AbstractFactory\AbstractProductA;

class ConcreteProductA2 implements AbstractProductA
{
    public function usefulFunctionA(): string
    {
        return "The result of the product A2";
    }
}

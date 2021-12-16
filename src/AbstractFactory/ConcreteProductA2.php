<?php


namespace Flowerallure\PhpunitLearn\AbstractFactory;


use Flowerallure\PhpunitLearn\AbstractFactory\Product\AbstractProductA;

class ConcreteProductA2 implements AbstractProductA
{
    public function usefulFunctionA(): string
    {
        return "The result of the product A2";
    }
}

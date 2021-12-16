<?php


namespace Flowerallure\PhpunitLearn\AbstractFactory;


use Flowerallure\PhpunitLearn\AbstractFactory\Product\AbstractProductA;

class ConcreteProductB1 implements Product\AbstractProductB
{

    public function usefulFunctionB(): string
    {
        return "The result of the product B1.";
    }

    public function anotherUsefulFunctionB(AbstractProductA $collabortor): string
    {
        $result = $collabortor->usefulFunctionA();

        return "The result of the B1 collaborating with the ({$result})";
    }
}

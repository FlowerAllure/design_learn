<?php


namespace Flowerallure\PhpunitLearn\AbstractFactory\ConcreteProductB;


use Flowerallure\PhpunitLearn\AbstractFactory\AbstractProductA;
use Flowerallure\PhpunitLearn\AbstractFactory\AbstractProductB;

class ConcreteProductB1 implements AbstractProductB
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

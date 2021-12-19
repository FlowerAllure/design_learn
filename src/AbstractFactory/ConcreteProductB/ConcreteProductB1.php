<?php


namespace Flowerallure\DesignLearn\AbstractFactory\ConcreteProductB;


use Flowerallure\DesignLearn\AbstractFactory\AbstractProductA;
use Flowerallure\DesignLearn\AbstractFactory\AbstractProductB;

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

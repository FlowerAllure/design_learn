<?php


namespace Flowerallure\DesignLearn\AbstractFactory;


interface AbstractProductB
{
    public function usefulFunctionB(): string;

    public function anotherUsefulFunctionB(AbstractProductA $abstractProductA): string;
}

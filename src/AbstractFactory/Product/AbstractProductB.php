<?php


namespace Flowerallure\PhpunitLearn\AbstractFactory\Product;


interface AbstractProductB
{
    public function usefulFunctionB(): string;

    public function anotherUsefulFunctionB(AbstractProductA $abstractProductA): string;
}

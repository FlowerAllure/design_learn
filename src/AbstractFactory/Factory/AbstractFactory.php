<?php


namespace Flowerallure\PhpunitLearn\AbstractFactory\Factory;


use Flowerallure\PhpunitLearn\AbstractFactory\Product\AbstractProductA;
use Flowerallure\PhpunitLearn\AbstractFactory\Product\AbstractProductB;

interface AbstractFactory
{
    public function createProductA(): AbstractProductA;

    public function createProductB(): AbstractProductB;
}

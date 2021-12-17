<?php


namespace Flowerallure\PhpunitLearn\AbstractFactory;


interface AbstractFactory
{
    public function createProductA(): AbstractProductA;

    public function createProductB(): AbstractProductB;
}

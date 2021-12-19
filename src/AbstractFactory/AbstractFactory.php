<?php


namespace Flowerallure\DesignLearn\AbstractFactory;


interface AbstractFactory
{
    public function createProductA(): AbstractProductA;

    public function createProductB(): AbstractProductB;
}

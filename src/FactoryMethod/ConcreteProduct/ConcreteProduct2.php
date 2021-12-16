<?php

namespace Flowerallure\PhpunitLearn\FactoryMethod\ConcreteProduct;

use Flowerallure\PhpunitLearn\FactoryMethod\Product;

class ConcreteProduct2 implements Product
{
    public function operation()
    {
        return "{Result of the ConcreteProduct2}";
    }
}

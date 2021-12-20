<?php

namespace Flowerallure\DesignLearn\FactoryMethod\ConcreteProduct;

use Flowerallure\DesignLearn\FactoryMethod\Product;

class ConcreteProduct2 implements Product
{
    public function operation()
    {
        return '{Result of the ConcreteProduct2}';
    }
}

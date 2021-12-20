<?php

/*
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Flowerallure\DesignLearn\FactoryMethod\ConcreteProduct;

use Flowerallure\DesignLearn\FactoryMethod\Product;

class ConcreteProduct1 implements Product
{
    public function operation()
    {
        return '{Result of the ConcreteProduct1}';
    }
}

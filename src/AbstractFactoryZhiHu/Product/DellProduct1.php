<?php

/*
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Flowerallure\DesignLearn\AbstractFactoryZhiHu\Product;

use Flowerallure\DesignLearn\AbstractFactoryZhiHu\Product1;

class DellProduct1 implements Product1
{
    public function name(): string
    {
        return 'Dell Product1';
    }
}

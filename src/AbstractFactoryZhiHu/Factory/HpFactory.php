<?php

/*
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Flowerallure\DesignLearn\AbstractFactoryZhiHu\Factory;

use Flowerallure\DesignLearn\AbstractFactoryZhiHu\Factory;
use Flowerallure\DesignLearn\AbstractFactoryZhiHu\Product\HpProduct1;
use Flowerallure\DesignLearn\AbstractFactoryZhiHu\Product\HpProduct2;
use Flowerallure\DesignLearn\AbstractFactoryZhiHu\Product\HpProduct3;
use Flowerallure\DesignLearn\AbstractFactoryZhiHu\Product1;
use Flowerallure\DesignLearn\AbstractFactoryZhiHu\Product2;
use Flowerallure\DesignLearn\AbstractFactoryZhiHu\Product3;

class HpFactory implements Factory
{
    public function createProduct1(): Product1
    {
        return new HpProduct1();
    }

    public function createProduct2(): Product2
    {
        return new HpProduct2();
    }

    public function createProduct3(): Product3
    {
        return new HpProduct3();
    }
}

<?php

/*
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Flowerallure\DesignLearn\FactoryMethodZhiHu\Factory;

use Flowerallure\DesignLearn\FactoryMethodZhiHu\App;
use Flowerallure\DesignLearn\FactoryMethodZhiHu\Factory;
use Flowerallure\DesignLearn\FactoryMethodZhiHu\Product\Vx;

class VXFactory implements Factory
{
    public function createApp(): App
    {
        return new Vx();
    }
}

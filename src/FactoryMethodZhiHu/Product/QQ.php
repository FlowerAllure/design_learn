<?php

/*
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Flowerallure\DesignLearn\FactoryMethodZhiHu\Product;

use Flowerallure\DesignLearn\FactoryMethodZhiHu\App;

class QQ implements App
{
    public function name(): string
    {
        return 'My Name Is QQ';
    }
}

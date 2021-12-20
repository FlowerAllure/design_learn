<?php

/*
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Flowerallure\DesignLearn\AbstractFactoryZhiHu;

interface Factory
{
    public function createProduct1(): Product1;

    public function createProduct2(): Product2;

    public function createProduct3(): Product3;
}

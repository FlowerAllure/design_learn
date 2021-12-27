<?php

/*
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Flowerallure\DesignLearn\BuilderLearnKu\Product;

abstract class Vehicle
{
    private array $data = [];

    public function setPart($key, $value)
    {
        $this->data[$key] = $value;
    }
}

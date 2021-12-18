<?php


namespace Flowerallure\PhpunitLearn\AbstractFactoryZhiHu\Product;


use Flowerallure\PhpunitLearn\AbstractFactoryZhiHu\Factory\DellFactory;
use Flowerallure\PhpunitLearn\AbstractFactoryZhiHu\KeyboardProduct;

class DellKeyBoard implements KeyboardProduct
{
    public function name(): string
    {
        return "Dell KeyBoard";
    }
}

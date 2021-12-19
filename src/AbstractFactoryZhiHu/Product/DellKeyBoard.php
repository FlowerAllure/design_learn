<?php


namespace Flowerallure\DesignLearn\AbstractFactoryZhiHu\Product;


use Flowerallure\DesignLearn\AbstractFactoryZhiHu\Factory\DellFactory;
use Flowerallure\DesignLearn\AbstractFactoryZhiHu\KeyboardProduct;

class DellKeyBoard implements KeyboardProduct
{
    public function name(): string
    {
        return "Dell KeyBoard";
    }
}

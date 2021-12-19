<?php


namespace Flowerallure\DesignLearn\AbstractFactoryZhiHu\Product;


use Flowerallure\DesignLearn\AbstractFactoryZhiHu\KeyboardProduct;

class HPKeyBoard implements KeyboardProduct
{

    public function name(): string
    {
        return "HP KeyBoard";
    }
}

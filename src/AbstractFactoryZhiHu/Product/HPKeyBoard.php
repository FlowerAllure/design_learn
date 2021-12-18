<?php


namespace Flowerallure\PhpunitLearn\AbstractFactoryZhiHu\Product;


use Flowerallure\PhpunitLearn\AbstractFactoryZhiHu\KeyboardProduct;

class HPKeyBoard implements KeyboardProduct
{

    public function name(): string
    {
        return "HP KeyBoard";
    }
}

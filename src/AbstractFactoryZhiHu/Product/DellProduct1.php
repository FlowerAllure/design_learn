<?php


namespace Flowerallure\DesignLearn\AbstractFactoryZhiHu\Product;


use Flowerallure\DesignLearn\AbstractFactoryZhiHu\Product1;

class DellProduct1 implements Product1
{
    public function name(): string
    {
        return "Dell Product1";
    }
}

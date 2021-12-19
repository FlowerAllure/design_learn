<?php


namespace Flowerallure\DesignLearn\AbstractFactoryZhiHu\Factory;


use Flowerallure\DesignLearn\AbstractFactoryZhiHu\Factory;
use Flowerallure\DesignLearn\AbstractFactoryZhiHu\Product1;
use Flowerallure\DesignLearn\AbstractFactoryZhiHu\Product2;
use Flowerallure\DesignLearn\AbstractFactoryZhiHu\Product3;
use Flowerallure\DesignLearn\AbstractFactoryZhiHu\Product\DellProduct3;
use Flowerallure\DesignLearn\AbstractFactoryZhiHu\Product\DellProduct1;
use Flowerallure\DesignLearn\AbstractFactoryZhiHu\Product\DellProduct2;

class DellFactory implements Factory
{
    public function createProduct1(): Product1
    {
        return new DellProduct1();
    }

    public function createProduct2(): Product2
    {
        return new DellProduct2();
    }

    public function createProduct3(): Product3
    {
        return new DellProduct3();
    }
}

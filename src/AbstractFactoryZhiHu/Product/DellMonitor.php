<?php


namespace Flowerallure\DesignLearn\AbstractFactoryZhiHu\Product;


use Flowerallure\DesignLearn\AbstractFactoryZhiHu\MonitorProduct;

class DellMonitor implements MonitorProduct
{

    public function name(): string
    {
        return "Dell Monitor";
    }
}

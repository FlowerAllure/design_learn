<?php


namespace Flowerallure\PhpunitLearn\AbstractFactoryZhiHu\Product;


use Flowerallure\PhpunitLearn\AbstractFactoryZhiHu\MonitorProduct;

class DellMonitor implements MonitorProduct
{

    public function name(): string
    {
        return "Dell Monitor";
    }
}

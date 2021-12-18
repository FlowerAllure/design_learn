<?php


namespace Flowerallure\PhpunitLearn\AbstractFactoryZhiHu\Product;


use Flowerallure\PhpunitLearn\AbstractFactoryZhiHu\MonitorProduct;

class HpMonitor implements MonitorProduct
{

    public function name(): string
    {
        return "Hp Monitor";
    }
}

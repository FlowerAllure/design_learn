<?php


namespace Flowerallure\DesignLearn\AbstractFactoryZhiHu\Product;


use Flowerallure\DesignLearn\AbstractFactoryZhiHu\MonitorProduct;

class HpMonitor implements MonitorProduct
{

    public function name(): string
    {
        return "Hp Monitor";
    }
}

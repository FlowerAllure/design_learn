<?php


namespace Flowerallure\DesignLearn\AbstractFactoryZhiHu\Product;


use Flowerallure\DesignLearn\AbstractFactoryZhiHu\MainFrameProduct;

class DellMainFrame implements MainFrameProduct
{
    public function name(): string
    {
        return "Dell MainFrame";
    }
}

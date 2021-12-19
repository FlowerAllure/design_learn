<?php


namespace Flowerallure\DesignLearn\AbstractFactoryZhiHu\Product;


use Flowerallure\DesignLearn\AbstractFactoryZhiHu\MainFrameProduct;

class HpMainFrame implements MainFrameProduct
{

    public function name(): string
    {
        return "Hp MainFrame";
    }
}

<?php


namespace Flowerallure\PhpunitLearn\AbstractFactoryZhiHu\Product;


use Flowerallure\PhpunitLearn\AbstractFactoryZhiHu\MainFrameProduct;

class HpMainFrame implements MainFrameProduct
{

    public function name(): string
    {
        return "Hp MainFrame";
    }
}

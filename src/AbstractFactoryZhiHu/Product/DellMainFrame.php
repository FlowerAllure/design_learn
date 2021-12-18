<?php


namespace Flowerallure\PhpunitLearn\AbstractFactoryZhiHu\Product;


use Flowerallure\PhpunitLearn\AbstractFactoryZhiHu\MainFrameProduct;

class DellMainFrame implements MainFrameProduct
{
    public function name(): string
    {
        return "Dell MainFrame";
    }
}

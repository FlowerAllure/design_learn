<?php


namespace Flowerallure\PhpunitLearn\AbstractFactoryZhiHu\Factory;


use Flowerallure\PhpunitLearn\AbstractFactoryZhiHu\IFactory;
use Flowerallure\PhpunitLearn\AbstractFactoryZhiHu\KeyboardProduct;
use Flowerallure\PhpunitLearn\AbstractFactoryZhiHu\MainFrameProduct;
use Flowerallure\PhpunitLearn\AbstractFactoryZhiHu\MonitorProduct;
use Flowerallure\PhpunitLearn\AbstractFactoryZhiHu\Product\HPKeyBoard;
use Flowerallure\PhpunitLearn\AbstractFactoryZhiHu\Product\HpMainFrame;
use Flowerallure\PhpunitLearn\AbstractFactoryZhiHu\Product\HpMonitor;

class HpFactory implements IFactory
{
    public function createMainFrame(): MainFrameProduct
    {
        return new HpMainFrame();
    }

    public function createMonitor(): MonitorProduct
    {
        return new HpMonitor();
    }

    public function createKeyboard(): KeyboardProduct
    {
        return new HPKeyBoard();
    }
}

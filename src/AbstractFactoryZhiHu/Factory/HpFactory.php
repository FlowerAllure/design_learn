<?php


namespace Flowerallure\DesignLearn\AbstractFactoryZhiHu\Factory;


use Flowerallure\DesignLearn\AbstractFactoryZhiHu\IFactory;
use Flowerallure\DesignLearn\AbstractFactoryZhiHu\KeyboardProduct;
use Flowerallure\DesignLearn\AbstractFactoryZhiHu\MainFrameProduct;
use Flowerallure\DesignLearn\AbstractFactoryZhiHu\MonitorProduct;
use Flowerallure\DesignLearn\AbstractFactoryZhiHu\Product\HPKeyBoard;
use Flowerallure\DesignLearn\AbstractFactoryZhiHu\Product\HpMainFrame;
use Flowerallure\DesignLearn\AbstractFactoryZhiHu\Product\HpMonitor;

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

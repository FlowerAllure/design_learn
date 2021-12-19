<?php


namespace Flowerallure\DesignLearn\AbstractFactoryZhiHu\Factory;


use Flowerallure\DesignLearn\AbstractFactoryZhiHu\IFactory;
use Flowerallure\DesignLearn\AbstractFactoryZhiHu\KeyboardProduct;
use Flowerallure\DesignLearn\AbstractFactoryZhiHu\MainFrameProduct;
use Flowerallure\DesignLearn\AbstractFactoryZhiHu\MonitorProduct;
use Flowerallure\DesignLearn\AbstractFactoryZhiHu\Product\DellKeyBoard;
use Flowerallure\DesignLearn\AbstractFactoryZhiHu\Product\DellMainFrame;
use Flowerallure\DesignLearn\AbstractFactoryZhiHu\Product\DellMonitor;

class DellFactory implements IFactory
{
    public function createMainFrame(): MainFrameProduct
    {
        return new DellMainFrame();
    }

    public function createMonitor(): MonitorProduct
    {
        return new DellMonitor();
    }

    public function createKeyboard(): KeyboardProduct
    {
        return new DellKeyBoard();
    }
}

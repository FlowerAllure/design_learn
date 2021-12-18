<?php


namespace Flowerallure\PhpunitLearn\AbstractFactoryZhiHu\Factory;


use Flowerallure\PhpunitLearn\AbstractFactoryZhiHu\IFactory;
use Flowerallure\PhpunitLearn\AbstractFactoryZhiHu\KeyboardProduct;
use Flowerallure\PhpunitLearn\AbstractFactoryZhiHu\MainFrameProduct;
use Flowerallure\PhpunitLearn\AbstractFactoryZhiHu\MonitorProduct;
use Flowerallure\PhpunitLearn\AbstractFactoryZhiHu\Product\DellKeyBoard;
use Flowerallure\PhpunitLearn\AbstractFactoryZhiHu\Product\DellMainFrame;
use Flowerallure\PhpunitLearn\AbstractFactoryZhiHu\Product\DellMonitor;

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

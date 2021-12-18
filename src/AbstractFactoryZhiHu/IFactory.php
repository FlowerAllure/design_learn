<?php


namespace Flowerallure\PhpunitLearn\AbstractFactoryZhiHu;


interface IFactory
{
    public function createMainFrame(): MainFrameProduct;
    public function createMonitor(): MonitorProduct;
    public function createKeyboard(): KeyboardProduct;
}

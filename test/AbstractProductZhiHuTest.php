<?php


use Flowerallure\PhpunitLearn\AbstractFactoryZhiHu\Factory\DellFactory;
use Flowerallure\PhpunitLearn\AbstractFactoryZhiHu\Product\DellKeyBoard;
use Flowerallure\PhpunitLearn\AbstractFactoryZhiHu\Product\DellMainFrame;
use Flowerallure\PhpunitLearn\AbstractFactoryZhiHu\Product\DellMonitor;
use PHPUnit\Framework\TestCase;

class AbstractProductZhiHuTest extends TestCase
{
    public function testDell()
    {
        $dellFactory = new DellFactory();
        $keyBoard = $dellFactory->createKeyboard();
        $mainFrame = $dellFactory->createMainFrame();
        $monitor = $dellFactory->createMonitor();

        $this->assertInstanceOf(DellKeyBoard::class, $keyBoard);
        $this->assertInstanceOf(DellMainFrame::class, $mainFrame);
        $this->assertInstanceOf(DellMonitor::class, $monitor);
    }
}

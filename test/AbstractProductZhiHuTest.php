<?php


use Flowerallure\DesignLearn\AbstractFactoryZhiHu\Factory\DellFactory;
use Flowerallure\DesignLearn\AbstractFactoryZhiHu\Product\DellKeyBoard;
use Flowerallure\DesignLearn\AbstractFactoryZhiHu\Product\DellMainFrame;
use Flowerallure\DesignLearn\AbstractFactoryZhiHu\Product\DellMonitor;
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

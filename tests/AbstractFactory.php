<?php

namespace FlowerAllure\DesignLearn\Test;

use FlowerAllure\DesignLearn\AbstractFactory\DellFactory;
use FlowerAllure\DesignLearn\AbstractFactory\DellKeyBoard;
use FlowerAllure\DesignLearn\AbstractFactory\DellMouse;
use FlowerAllure\DesignLearn\AbstractFactory\HpFactory;
use FlowerAllure\DesignLearn\AbstractFactory\HpKeyBoard;
use FlowerAllure\DesignLearn\AbstractFactory\HpMouse;

class AbstractFactory extends TestCase
{
    public function testCanCreateDellKeyBoard()
    {
        $factory = new DellFactory();
        $product = $factory->createKeyBoard();
        $product->info();
        $this->assertInstanceOf(DellKeyBoard::class, $product);
    }
    public function testCanCreateDellMouse()
    {
        $factory = new DellFactory();
        $product = $factory->createMouse();
        $product->info();
        $this->assertInstanceOf(DellMouse::class, $product);
    }
    public function testCanCreateHpKeyBoard()
    {
        $factory = new HpFactory();
        $product = $factory->createKeyBoard();
        $product->info();
        $this->assertInstanceOf(HpKeyBoard::class, $product);
    }
    public function testCanCreateHpMouse()
    {
        $factory = new HpFactory();
        $product = $factory->createMouse();
        $product->info();
        $this->assertInstanceOf(HpMouse::class, $product);
    }
}

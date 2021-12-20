<?php

use Flowerallure\DesignLearn\AbstractFactoryZhiHu\Factory\DellFactory;
use Flowerallure\DesignLearn\AbstractFactoryZhiHu\Factory\HpFactory;
use Flowerallure\DesignLearn\AbstractFactoryZhiHu\Product\DellProduct1;
use Flowerallure\DesignLearn\AbstractFactoryZhiHu\Product\DellProduct2;
use Flowerallure\DesignLearn\AbstractFactoryZhiHu\Product\DellProduct3;
use Flowerallure\DesignLearn\AbstractFactoryZhiHu\Product\HpProduct1;
use Flowerallure\DesignLearn\AbstractFactoryZhiHu\Product\HpProduct2;
use Flowerallure\DesignLearn\AbstractFactoryZhiHu\Product\HpProduct3;
use PHPUnit\Framework\TestCase;

class AbstractProductZhiHuTest extends TestCase
{
    private ?DellFactory $dellFactory = null;
    private ?HpFactory $hpFactory = null;

    protected function setUp(): void
    {
        $this->dellFactory = new DellFactory();
        $this->hpFactory = new HpFactory();
    }

    public function testDell()
    {
        $product1 = $this->dellFactory->createProduct1();
        $product2 = $this->dellFactory->createProduct2();
        $product3 = $this->dellFactory->createProduct3();

        echo $product1->name().PHP_EOL;
        echo $product2->name().PHP_EOL;
        echo $product3->name().PHP_EOL;

        $this->assertInstanceOf(DellProduct1::class, $product1);
        $this->assertInstanceOf(DellProduct2::class, $product2);
        $this->assertInstanceOf(DellProduct3::class, $product3);
    }

    public function testHp()
    {
        $product1 = $this->hpFactory->createProduct1();
        $product2 = $this->hpFactory->createProduct2();
        $product3 = $this->hpFactory->createProduct3();

        echo $product1->name().PHP_EOL;
        echo $product2->name().PHP_EOL;
        echo $product3->name().PHP_EOL;

        $this->assertInstanceOf(HpProduct1::class, $product1);
        $this->assertInstanceOf(HpProduct2::class, $product2);
        $this->assertInstanceOf(HpProduct3::class, $product3);
    }
}

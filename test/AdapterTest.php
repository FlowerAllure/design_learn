<?php


use Flowerallure\DesignLearn\Adapter\Adaptee;
use Flowerallure\DesignLearn\Adapter\Adapter;
use Flowerallure\DesignLearn\Adapter\Target;
use PHPUnit\Framework\TestCase;

class AdapterTest extends TestCase
{
    public function testA()
    {
        $target = new Target();
        echo $target->request() . PHP_EOL;

        $adaptee = new Adaptee();
        echo $adaptee->specificRequest() . PHP_EOL;

        $adapter = new Adapter($adaptee);
        echo $adapter->request() . PHP_EOL;

        $this->assertTrue(true);
    }
}

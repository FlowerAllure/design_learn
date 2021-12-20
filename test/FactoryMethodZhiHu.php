<?php

/*
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

use Flowerallure\DesignLearn\FactoryMethodZhiHu\Factory\QQFactory;
use Flowerallure\DesignLearn\FactoryMethodZhiHu\Factory\VXFactory;
use Flowerallure\DesignLearn\FactoryMethodZhiHu\Product\QQ;
use Flowerallure\DesignLearn\FactoryMethodZhiHu\Product\Vx;
use PHPUnit\Framework\TestCase;

class FactoryMethodZhiHu extends TestCase
{
    public function testQQ()
    {
        $factory = new QQFactory();
        $qq = $factory->createApp();
        var_dump($qq->name());

        $this->assertInstanceOf(QQ::class, $qq);
    }

    public function testVx()
    {
        $factory = new VXFactory();
        $vx = $factory->createApp();
        var_dump($vx->name());

        $this->assertInstanceOf(Vx::class, $vx);
    }
}

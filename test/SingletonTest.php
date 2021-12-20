<?php

/*
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

use Flowerallure\DesignLearn\Singleton;
use PHPUnit\Framework\TestCase;

require '../vendor/autoload.php';

class SingletonTest extends TestCase
{
    public function testUniqueness()
    {
        $this->assertTrue(true);
        $firstCall = Singleton::getInstance();
        $secondCall = Singleton::getInstance();

        $this->assertInstanceOf(Singleton::class, $firstCall);
        $this->assertSame($firstCall, $secondCall);
    }
}

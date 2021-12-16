<?php

use Flowerallure\PhpunitLearn\Singleton;
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

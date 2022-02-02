<?php

namespace FlowerAllure\DesignLearn\Test;

use FlowerAllure\DesignLearn\Singleton\Singleton;
use FlowerAllure\DesignLearn\Singleton\SingletonA;
use JetBrains\PhpStorm\NoReturn;
use PHPUnit\Framework\TestCase;

class SingletonTest extends TestCase
{
    #[NoReturn]
    public function testSingleton()
    {
        $firstCall = Singleton::getInstance();
        $secondCall = Singleton::getInstance();
        $this->assertSame(spl_object_hash($firstCall), spl_object_hash($secondCall));
    }

    public function testSingletonA()
    {
        $firstCall = SingletonA::getInstance();
        $secondCall = SingletonA::getInstance();
        $this->assertSame(spl_object_hash($firstCall), spl_object_hash($secondCall));
    }
}

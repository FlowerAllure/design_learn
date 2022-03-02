<?php

namespace FlowerAllure\DesignLearn\Test;

use FlowerAllure\DesignLearn\Singleton\Singleton;
use FlowerAllure\DesignLearn\Singleton\SingletonA;

class SingletonTest extends TestCase
{
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

    public function testSerialize()
    {
        $instance = Singleton::getInstance();
        $serializeInstance = serialize($instance);
        $unSerializeInstance = unserialize($serializeInstance);
        // 如果反序列化后，其对象hash不一样，说明重新new，所以需要进制反序列化
        $this->assertSame(spl_object_hash($instance), spl_object_hash($unSerializeInstance));
    }
}

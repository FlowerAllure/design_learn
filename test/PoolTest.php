<?php


use Flowerallure\DesignLearn\Pool\WorkPool;
use PHPUnit\Framework\TestCase;

class PoolTest extends TestCase
{
    public function testGet()
    {
        $pool = new WorkPool();
        $worker1 = $pool->get();
        $worker2 = $pool->get();

        $this->assertCount(2, $pool);
        $this->assertNotSame($worker1, $worker2);
    }

    public function testDispose()
    {
        $pool = new WorkPool();
        $worker1 = $pool->get();
        $pool->dispose($worker1);
        $worker2 = $pool->get();

        $this->assertCount(1, $pool);
        $this->assertSame($worker1, $worker2);
    }
}

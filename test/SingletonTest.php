<?php

use PHPUnit\Framework\TestCase;

require '../vendor/autoload.php';

class SingletonTest extends TestCase
{
    public function testOne()
    {
        $this->assertTrue(true);
    }
}

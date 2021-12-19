<?php

use Flowerallure\DesignLearn\StaticFactory\FormatNumber;
use Flowerallure\DesignLearn\StaticFactory\StaticFactory;
use PHPUnit\Framework\TestCase;

class StaticFactoryTest extends TestCase
{
    public function testCanCreateNumberFormatter()
    {
        $this->assertInstanceOf(FormatNumber::class, StaticFactory::factory('number'));
    }
}

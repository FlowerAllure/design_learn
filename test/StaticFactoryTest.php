<?php

use Flowerallure\PhpunitLearn\StaticFactory\FormatNumber;
use Flowerallure\PhpunitLearn\StaticFactory\StaticFactory;
use PHPUnit\Framework\TestCase;

class StaticFactoryTest extends TestCase
{
    public function testCanCreateNumberFormatter()
    {
        $this->assertInstanceOf(FormatNumber::class, StaticFactory::factory('number'));
    }
}

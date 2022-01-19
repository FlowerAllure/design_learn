<?php

use Flowerallure\DesignLearn\Bridge\HelloWorldService;
use Flowerallure\DesignLearn\Bridge\HtmlFormatter;
use Flowerallure\DesignLearn\Bridge\PlainTextFormatter;
use PHPUnit\Framework\TestCase;

class BridgeTest extends TestCase
{
    public function testA()
    {
        $service = new HelloWorldService();
        $formatter = new PlainTextFormatter();

        $this->assertEquals('Hello World', $service->get($formatter));
    }

    public function testB()
    {
        $service = new HelloWorldService();
        $formatter = new HtmlFormatter();

        $this->assertEquals('<p>Hello World</p>', $service->get($formatter));
    }
}

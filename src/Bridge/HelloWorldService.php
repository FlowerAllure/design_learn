<?php

namespace Flowerallure\DesignLearn\Bridge;

class HelloWorldService implements Service
{
    public function get(FormatterInterface $formatter)
    {
        return $formatter->format("Hello World");
    }


}

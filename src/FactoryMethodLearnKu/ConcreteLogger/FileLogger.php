<?php


namespace Flowerallure\DesignLearn\FactoryMethodLearnKu\ConcreteLogger;

use Flowerallure\DesignLearn\FactoryMethodLearnKu\Logger;

class FileLogger implements Logger
{
    public function log(string $message)
    {
        echo "File: " . $message;
    }
}

<?php


namespace Flowerallure\PhpunitLearn\FactoryMethodLearnKu\ConcreteLogger;

use Flowerallure\PhpunitLearn\FactoryMethodLearnKu\Logger;

class FileLogger implements Logger
{
    public function log(string $message)
    {
        echo "File: " . $message;
    }
}

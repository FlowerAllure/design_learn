<?php


namespace Flowerallure\PhpunitLearn\FactoryMethodLearnKu\ConcreteFactory;

use Flowerallure\PhpunitLearn\FactoryMethodLearnKu\ConcreteLogger\FileLogger;
use Flowerallure\PhpunitLearn\FactoryMethodLearnKu\Logger;
use Flowerallure\PhpunitLearn\FactoryMethodLearnKu\LoggerFactory;

class FileLoggerFactory implements LoggerFactory
{
    public function createLogger(): Logger
    {
        return new FileLogger();
    }
}

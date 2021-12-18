<?php


namespace Flowerallure\PhpunitLearn\FactoryMethodLearnKu\ConcreteFactory;

use Flowerallure\PhpunitLearn\FactoryMethodLearnKu\ConcreteLogger\StdoutLogger;
use Flowerallure\PhpunitLearn\FactoryMethodLearnKu\Logger;
use Flowerallure\PhpunitLearn\FactoryMethodLearnKu\LoggerFactory;

class StdoutLoggerFactory implements LoggerFactory
{
    public function createLogger(): Logger
    {
        return new StdoutLogger();
    }
}

<?php

namespace Flowerallure\DesignLearn\FactoryMethodLearnKu\ConcreteFactory;

use Flowerallure\DesignLearn\FactoryMethodLearnKu\ConcreteLogger\FileLogger;
use Flowerallure\DesignLearn\FactoryMethodLearnKu\Logger;
use Flowerallure\DesignLearn\FactoryMethodLearnKu\LoggerFactory;

class FileLoggerFactory implements LoggerFactory
{
    public function createLogger(): Logger
    {
        return new FileLogger();
    }
}

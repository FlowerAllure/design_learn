<?php

namespace Flowerallure\DesignLearn\FactoryMethodLearnKu\ConcreteFactory;

use Flowerallure\DesignLearn\FactoryMethodLearnKu\ConcreteLogger\StdoutLogger;
use Flowerallure\DesignLearn\FactoryMethodLearnKu\Logger;
use Flowerallure\DesignLearn\FactoryMethodLearnKu\LoggerFactory;

class StdoutLoggerFactory implements LoggerFactory
{
    public function createLogger(): Logger
    {
        return new StdoutLogger();
    }
}

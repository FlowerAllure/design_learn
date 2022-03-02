<?php

namespace FlowerAllure\DesignLearn\Test;

use FlowerAllure\DesignLearn\FactoryMethod\FileLogger;
use FlowerAllure\DesignLearn\FactoryMethod\FileLoggerFactory;
use FlowerAllure\DesignLearn\FactoryMethod\SqlLogger;
use FlowerAllure\DesignLearn\FactoryMethod\SqlLoggerFactory;

class FactoryMethodTest extends TestCase
{
    public function testCanCreateSqlLogging()
    {
        $loggerFactory = new SqlLoggerFactory();
        $logger = $loggerFactory->createLogger();
        $logger->info("工厂模式");
        $this->assertInstanceOf(SqlLogger::class, $logger);
    }

    public function testCanCreateFileLogging()
    {
        $loggerFactory = new FileLoggerFactory();
        $logger = $loggerFactory->createLogger();
        $logger->info("工厂模式");
        $this->assertInstanceOf(FileLogger::class, $logger);
    }
}

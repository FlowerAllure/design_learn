<?php

/*
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace FlowerAllure\DesignLearn\Test;


use FlowerAllure\DesignLearn\FactoryMethod\Logger\DatabaseLogger;
use FlowerAllure\DesignLearn\FactoryMethod\Logger\FileLogger;
use FlowerAllure\DesignLearn\FactoryMethod\LoggerFactory\DatabaseLoggerFactory;
use FlowerAllure\DesignLearn\FactoryMethod\LoggerFactory\FileLoggerFactory;

class FactoryMethodTest extends TestCase
{
    public function testCanCreateSqlLogging()
    {
        $loggerFactory = new DatabaseLoggerFactory();
        $logger = $loggerFactory->createLogger();
        $logger->writeLog("数据库记录器");
        $this->assertInstanceOf(DatabaseLogger::class, $logger);
    }

    public function testCanCreateFileLogging()
    {
        $loggerFactory = new FileLoggerFactory();
        $logger = $loggerFactory->createLogger();
        $logger->writeLog('文件记录器');
        $this->assertInstanceOf(FileLogger::class, $logger);
    }
}

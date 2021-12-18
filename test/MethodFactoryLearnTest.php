<?php


use Flowerallure\PhpunitLearn\FactoryMethodLearnKu\ConcreteFactory\FileLoggerFactory;
use Flowerallure\PhpunitLearn\FactoryMethodLearnKu\ConcreteFactory\StdoutLoggerFactory;
use Flowerallure\PhpunitLearn\FactoryMethodLearnKu\ConcreteLogger\FileLogger;
use Flowerallure\PhpunitLearn\FactoryMethodLearnKu\ConcreteLogger\StdoutLogger;
use PHPUnit\Framework\TestCase;

class MethodFactoryLearnTest extends TestCase
{
    public function testStdout()
    {
        $loggerFactory = new StdoutLoggerFactory();
        $stdoutLogger = $loggerFactory->createLogger();
        echo $stdoutLogger->log("OK");
        $this->assertInstanceOf(StdoutLogger::class, $stdoutLogger);
    }

    public function testFile()
    {
        $loggerFactory = new FileLoggerFactory();
        $fileLogger = $loggerFactory->createLogger();
        echo $fileLogger->log("OK");
        $this->assertInstanceOf(FileLogger::class, $fileLogger);
    }
}

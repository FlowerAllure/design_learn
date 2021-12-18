<?php


namespace Flowerallure\PhpunitLearn\FactoryMethodLearnKu\ConcreteLogger;


use Flowerallure\PhpunitLearn\FactoryMethodLearnKu\Logger;

class StdoutLogger implements Logger
{
    public function log(string $message)
    {
        echo "Stdout: " . $message;
    }
}

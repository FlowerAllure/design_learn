<?php


namespace Flowerallure\DesignLearn\FactoryMethodLearnKu\ConcreteLogger;


use Flowerallure\DesignLearn\FactoryMethodLearnKu\Logger;

class StdoutLogger implements Logger
{
    public function log(string $message)
    {
        echo "Stdout: " . $message;
    }
}

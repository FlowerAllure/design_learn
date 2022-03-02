<?php

namespace FlowerAllure\DesignLearn\FactoryMethod;

use JetBrains\PhpStorm\Pure;

class FileLoggerFactory implements LoggerFactory
{

    #[Pure]
    public function createLogger(): Logger
    {
        return new FileLogger();
    }
}

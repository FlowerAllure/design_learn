<?php

namespace FlowerAllure\DesignLearn\FactoryMethod;

use JetBrains\PhpStorm\Pure;

class SqlLoggerFactory implements LoggerFactory
{

    #[Pure]
    public function createLogger(): Logger
    {
        return new SqlLogger();
    }
}

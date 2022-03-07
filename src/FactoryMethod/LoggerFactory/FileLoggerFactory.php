<?php

/*
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace FlowerAllure\DesignLearn\FactoryMethod\LoggerFactory;

use FlowerAllure\DesignLearn\FactoryMethod\Logger;
use FlowerAllure\DesignLearn\FactoryMethod\Logger\FileLogger;
use FlowerAllure\DesignLearn\FactoryMethod\LoggerFactory;
use JetBrains\PhpStorm\Pure;

class FileLoggerFactory implements LoggerFactory
{
    #[Pure]
    public function createLogger(): Logger
    {
        return new FileLogger();
    }
}

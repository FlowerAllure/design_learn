<?php

/*
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Flowerallure\DesignLearn;

/**
 * 单例模式
 * Class Singleton.
 */
final class Singleton
{
    private static $instance = null;

    public static function getInstance(): Singleton
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }

        return static::$instance;
    }

    private function __clone(): void
    {
        // TODO: Implement __clone() method.
    }

    private function __construct()
    {
        // TODO: Implement __construct() method.
    }

    public function __wakeup(): void
    {
        // TODO: Implement __wakeup() method.
    }
}

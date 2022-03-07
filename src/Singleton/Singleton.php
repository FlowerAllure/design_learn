<?php

/*
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace FlowerAllure\DesignLearn\Singleton;

class Singleton
{
    private static ?Singleton $instance = null;

    private function __construct()
    {
    }

    private function __clone(): void
    {
        // TODO: Implement __clone() method.
    }

    public function __wakeup(): void
    {
        throw new \Exception('cannot serialize a singleton.');
    }

    public static function getInstance(): ?Singleton
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }

        return static::$instance;
    }
}

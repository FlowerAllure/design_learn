<?php
namespace Flowerallure\DesignLearn;

/**
 * 单例模式
 * Class Singleton
 * @package Flowerallure\DesignLearn
 */
final class Singleton
{
    private static $instance = null;

    /**
     * @return Singleton
     */
    public static function getInstance(): Singleton
    {
        if (static::$instance === null) {
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

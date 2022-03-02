<?php

namespace FlowerAllure\DesignLearn\FactoryMethod;

class FileLogger implements Logger
{

    public function info(string $message)
    {
        echo_export(self::class . ': ' . $message);
    }
}

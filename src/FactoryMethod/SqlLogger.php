<?php

namespace FlowerAllure\DesignLearn\FactoryMethod;

class SqlLogger implements Logger
{

    public function info(string $message)
    {
        echo_export(self::class . ': ' . $message);
    }
}

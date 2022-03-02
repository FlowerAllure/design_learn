<?php

namespace FlowerAllure\DesignLearn\FactoryMethod;

interface LoggerFactory
{
    public function createLogger(): Logger;
}

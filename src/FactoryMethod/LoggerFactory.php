<?php

/*
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace FlowerAllure\DesignLearn\FactoryMethod;

interface LoggerFactory
{
    public function createLogger(): Logger;
}

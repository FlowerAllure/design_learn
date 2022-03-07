<?php

/*
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace FlowerAllure\DesignLearn\FactoryMethod\Logger;

use FlowerAllure\DesignLearn\FactoryMethod\Logger;

class DatabaseLogger implements Logger
{
    public function writeLog(string $message)
    {
        echo_export($message);
    }
}

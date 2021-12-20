<?php

/*
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Flowerallure\DesignLearn\FactoryMethodLearnKu\ConcreteLogger;

use Flowerallure\DesignLearn\FactoryMethodLearnKu\Logger;

class StdoutLogger implements Logger
{
    public function log(string $message)
    {
        echo 'Stdout: '.$message;
    }
}

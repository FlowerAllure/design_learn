<?php

/*
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Flowerallure\DesignLearn\StaticFactory;

final class StaticFactory
{
    public static function factory(string $type)
    {
        if ('number' == $type) {
            return new FormatNumber();
        }

        if ('string' == $type) {
            return new FormatString();
        }

        throw new \InvalidArgumentException('Unknown format given');
    }
}

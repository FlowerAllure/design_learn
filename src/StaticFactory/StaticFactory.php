<?php


namespace Flowerallure\PhpunitLearn\StaticFactory;


final class StaticFactory
{
    public static function factory(string $type)
    {
        if ($type == 'number') {
            return new FormatNumber();
        }

        if ($type == 'string') {
            return new FormatString();
        }

        throw new \InvalidArgumentException('Unknown format given');

    }
}

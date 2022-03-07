<?php

/*
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

function echo_print(string|int|float $str)
{
    echo $str;
    echo PHP_EOL;
}

function echo_export(mixed $str)
{
    var_export($str);
    echo PHP_EOL;
}

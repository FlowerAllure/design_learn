<?php

/*
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace FlowerAllure\DesignLearn\AbstractFactory;

class HpMouse implements AbstractMouse
{
    public function info()
    {
        echo_export('HP Mouse');
    }
}

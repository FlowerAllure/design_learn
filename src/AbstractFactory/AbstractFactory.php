<?php

/*
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace FlowerAllure\DesignLearn\AbstractFactory;

interface AbstractFactory
{
    // 创建键盘
    public function createKeyBoard(): AbstractKeyBoard;

    // 创建鼠标
    public function createMouse(): AbstractMouse;
}

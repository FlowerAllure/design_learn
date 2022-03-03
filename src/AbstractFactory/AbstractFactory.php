<?php

namespace FlowerAllure\DesignLearn\AbstractFactory;

interface AbstractFactory
{
    // 创建键盘
    public function createKeyBoard(): AbstractKeyBoard;

    // 创建鼠标
    public function createMouse(): AbstractMouse;
}

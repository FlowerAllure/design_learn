<?php

namespace FlowerAllure\DesignLearn\AbstractFactory;

use JetBrains\PhpStorm\Pure;

class HpFactory implements AbstractFactory
{
    #[Pure]
    public function createKeyBoard(): AbstractKeyBoard
    {
        return new HpKeyBoard();
    }

    #[Pure]
    public function createMouse(): AbstractMouse
    {
        return new HpMouse();
    }
}

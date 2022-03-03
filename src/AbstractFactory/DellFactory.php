<?php

namespace FlowerAllure\DesignLearn\AbstractFactory;

use JetBrains\PhpStorm\Pure;

class DellFactory implements AbstractFactory
{
    #[Pure]
    public function createKeyBoard(): AbstractKeyBoard
    {
        return new DellKeyBoard();
    }

    #[Pure]
    public function createMouse(): AbstractMouse
    {
        return new DellMouse();
    }
}

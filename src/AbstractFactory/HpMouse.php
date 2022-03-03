<?php

namespace FlowerAllure\DesignLearn\AbstractFactory;

class HpMouse implements AbstractMouse
{
    public function info()
    {
        echo_export("HP Mouse");
    }
}

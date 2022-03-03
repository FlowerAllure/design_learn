<?php

namespace FlowerAllure\DesignLearn\AbstractFactory;

class DellMouse implements AbstractMouse
{
    public function info()
    {
        echo_export("Dell Mouse");
    }
}

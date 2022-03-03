<?php

namespace FlowerAllure\DesignLearn\AbstractFactory;

class DellKeyBoard implements AbstractKeyBoard
{
    public function info()
    {
        echo_export("Dell KeyBoard");
    }
}

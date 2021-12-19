<?php


namespace Flowerallure\DesignLearn\SimpleFactory;


class SimpleFactory
{
    public function createBicycle()
    {
        return new Bicycle();
    }
}

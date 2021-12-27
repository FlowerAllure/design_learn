<?php


namespace Flowerallure\DesignLearn\BuilderLearnKu\Product;


abstract class Vehicle
{
    private array $data = [];

    public function setPart($key, $value)
    {
        $this->data[$key] = $value;
    }
}

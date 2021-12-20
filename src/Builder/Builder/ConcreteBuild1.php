<?php


namespace Flowerallure\DesignLearn\Builder\Builder;


use Flowerallure\DesignLearn\Builder\Product\Product1;

class ConcreteBuild1 implements \Flowerallure\DesignLearn\Builder\Builder
{

    private $product;

    public function __construct()
    {
        $this->reset();
    }

    public function productPartA(): void
    {
        $this->product->parts[] = 'PartA1';
    }

    public function productPartB(): void
    {
        $this->product->parts[] = 'PartB1';
    }

    public function productPartC(): void
    {
        $this->product->parts[] = 'PartC1';
    }

    public function reset()
    {
        $this->product = new Product1();
    }

    public function getProduct()
    {
        $result = $this->product;
        $this->reset();

        return $result;
    }
}

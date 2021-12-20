<?php


namespace Flowerallure\DesignLearn\Builder;


class Director
{
    private $builder;

    /**
     * @param mixed $builder
     */
    public function setBuilder($builder): void
    {
        $this->builder = $builder;
    }

    public function buildMinimalViableProduct(): void
    {
        $this->builder->producePartA();
    }

    public function buildFullFeaturedProduct(): void
    {
        $this->builder->producePartA();
        $this->builder->producePartB();
        $this->builder->producePartC();
    }

}

<?php


use Flowerallure\DesignLearn\BuilderZhiHu\ItemConcreteBuilder;
use Flowerallure\DesignLearn\BuilderZhiHu\ItemDirector;
use PHPUnit\Framework\TestCase;

class BuilderZhiHuTest extends TestCase
{
    public function testMain()
    {
        $builder = new ItemConcreteBuilder();

        $director = new ItemDirector($builder);

        var_dump($director->normalConstruct());
        var_dump($director->cardConstruct());
        var_dump($director->videoConstruct());

        $this->assertTrue(true);
    }
}

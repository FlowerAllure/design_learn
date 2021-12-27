<?php

/*
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

use Flowerallure\DesignLearn\ProtoTypeLearnKu\BarBookPrototype;
use Flowerallure\DesignLearn\ProtoTypeLearnKu\FooBookPrototype;
use PHPUnit\Framework\TestCase;

class PrototypeLearnKuTest extends TestCase
{
    public function testCanGetFooBook()
    {
        $fooPrototype = new FooBookPrototype();
        $barPrototype = new BarBookPrototype();

        for ($i = 0; $i < 10; ++$i) {
            $book = clone $fooPrototype;
            $book->setTitle('Foo Book No '.$i);
            $this->assertInstanceOf(FooBookPrototype::class, $book);
        }

        for ($i = 0; $i < 5; ++$i) {
            $book = clone $barPrototype;
            $book->setTitle('Bar Book No '.$i);
            $this->assertInstanceOf(BarBookPrototype::class, $book);
        }
    }
}

<?php

/*
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

use Flowerallure\DesignLearn\Prototype\Author;
use Flowerallure\DesignLearn\Prototype\Page;
use PHPUnit\Framework\TestCase;

class PrototypeTest extends TestCase
{
    public function testA()
    {
        $author = new Author('John');

        $page = new Page('Hello', 'Goods', $author);

        $page->addComment('My is first!!!');

        $draft = clone $page;

        print_r($draft);

        $this->assertTrue(true);
    }
}

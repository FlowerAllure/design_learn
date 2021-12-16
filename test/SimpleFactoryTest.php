<?php


use Flowerallure\PhpunitLearn\SimpleFactory\Bicycle;
use Flowerallure\PhpunitLearn\SimpleFactory\SimpleFactory;
use PHPUnit\Framework\TestCase;

require '../vendor/autoload.php';


class SimpleFactoryTest extends TestCase
{
    public function testCanCreateBicycle()
    {
        $bicycle = (new SimpleFactory())->createBicycle();

        $this->assertInstanceOf(Bicycle::class, $bicycle);
    }
}

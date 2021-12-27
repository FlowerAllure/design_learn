<?php


namespace Flowerallure\DesignLearn\BuilderLearnKu;


use Flowerallure\DesignLearn\BuilderLearnKu\Product\Car;
use Flowerallure\DesignLearn\BuilderLearnKu\Product\Door;
use Flowerallure\DesignLearn\BuilderLearnKu\Product\Engine;
use Flowerallure\DesignLearn\BuilderLearnKu\Product\Vehicle;
use Flowerallure\DesignLearn\BuilderLearnKu\Product\Wheel;

class CarBuilder implements BuilderInterface
{
    private Vehicle $car;

    public function createVehicle()
    {
        $this->car = new Car();
    }

    public function addWheel()
    {
        $this->car->setPart('wheelLF', new Wheel());
        $this->car->setPart('wheelRF', new Wheel());
        $this->car->setPart('wheelLR', new Wheel());
        $this->car->setPart('wheelRR', new Wheel());
    }

    public function addEngine()
    {
        $this->car->setPart('engine', new Engine());
    }

    public function addDoors()
    {
        $this->car->setPart('rightDoor', new Door());
        $this->car->setPart('leftDoor', new Door());
    }

    public function getVehicle()
    {
        return $this->car;
    }
}

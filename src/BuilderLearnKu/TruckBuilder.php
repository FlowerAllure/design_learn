<?php

/*
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Flowerallure\DesignLearn\BuilderLearnKu;

use Flowerallure\DesignLearn\BuilderLearnKu\Product\Door;
use Flowerallure\DesignLearn\BuilderLearnKu\Product\Engine;
use Flowerallure\DesignLearn\BuilderLearnKu\Product\Truck;
use Flowerallure\DesignLearn\BuilderLearnKu\Product\Vehicle;
use Flowerallure\DesignLearn\BuilderLearnKu\Product\Wheel;

class TruckBuilder implements BuilderInterface
{
    private Vehicle $truck;

    public function createVehicle()
    {
        $this->truck = new Truck();
    }

    public function addWheel()
    {
        $this->truck->setPart('wheel1', new Wheel());
        $this->truck->setPart('wheel2', new Wheel());
        $this->truck->setPart('wheel3', new Wheel());
        $this->truck->setPart('wheel4', new Wheel());
        $this->truck->setPart('wheel5', new Wheel());
        $this->truck->setPart('wheel6', new Wheel());
    }

    public function addEngine()
    {
        $this->truck->setPart('truckEngine', new Engine());
    }

    public function addDoors()
    {
        $this->truck->setPart('rightDoor', new Door());
        $this->truck->setPart('leftDoor', new Door());
    }

    public function getVehicle()
    {
        return $this->truck;
    }
}

<?php
/**
 * Created by PhpStorm.
 * User: tobimaru
 * Date: 11.09.18
 * Time: 13:15
 */
namespace Patterns\Prototype\Sea;

use Patterns\Prototype\Fauna\Whale;

class EarthSea extends Sea
{
    private $biggestAnimal;

    public function __construct($navigability)
    {
        parent::__construct($navigability);
        $this->biggestAnimal = new Whale();
    }

    public function __clone()
    {
        $this->biggestAnimal = clone $this->biggestAnimal;
    }
}
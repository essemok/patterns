<?php
/**
 * Created by PhpStorm.
 * User: tobimaru
 * Date: 12.09.18
 * Time: 15:18
 */
namespace Patterns\Composite;

abstract class CompositeUnit extends Unit
{
    private $units = [];

    public function getComposite()
    {
        return $this;
    }

    protected function units()
    {
        return $this->units;
    }

    public function addUnit(Unit $unit)
    {
        if (in_array($unit, $this->units, true)){
            return;
        };
        $this->units[] = $unit;
    }

    public function removeUnits(Unit $unit)
    {
        $this->units = array_udiff($this->units, [$unit], function ($a, $b){
           return ($a === $b) ? 0 : 1;
        });
    }
}
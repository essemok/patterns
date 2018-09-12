<?php
/**
 * Created by PhpStorm.
 * User: tobimaru
 * Date: 12.09.18
 * Time: 10:30
 */
namespace Patterns\Composite;

class Army extends CompositeUnit
{
    private $units = [];


    public function addUnit(Unit $unit)
    {
        if (in_array($unit, $this->units, true)){
            return;
        }
        $this->units[] = $unit;
    }

    public function removeUnit(Unit $unit)
    {
        $this->units = array_udiff($this->units, [$unit], function ($a, $b){
           return ($a === $b) ? 0 : 1;
        });
    }

    public function bombardStrenght()
    {
        $power = 0;
        foreach ($this->units as $unit){
            $power += $unit->bombardStrenght();
        }
        return $power;
    }
}
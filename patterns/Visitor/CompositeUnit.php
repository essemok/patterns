<?php
/**
 * Created by PhpStorm.
 * User: tobimaru
 * Date: 12.09.18
 * Time: 15:18
 */
namespace Patterns\Visitor;

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
        foreach ($this->units as $thisunit){
            if ($unit === $thisunit){
                return;
            }
        }
        $unit->setDepth($this->depth + 1);
        $this->units[] = $unit;
    }

    public function removeUnits(Unit $unit)
    {
        $this->units = array_udiff($this->units, [$unit], function ($a, $b){
           return ($a === $b) ? 0 : 1;
        });
    }

    public function accept(ArmyVisitor $visitor)
    {
        parent::accept($visitor);

        foreach ($this->units as $thisunits){
            $thisunits->accept($visitor);
        }
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: tobimaru
 * Date: 12.09.18
 * Time: 15:36
 */
namespace Patterns\Composite;

class UnitScript
{
    private static $compositeOne = null;

    public static function joinExisting(Unit $newUnit, Unit $occupyingUnit){
        if (!is_null($occupyingUnit->getComposite())){
            $occupyingUnit->addUnit($newUnit);
            self::$compositeOne = $occupyingUnit;
        } else {
            $newArmy = new Army();
            $newArmy->addUnit($newUnit);
            $newArmy->addUnit($occupyingUnit);
            self::$compositeOne = $newArmy;
        }
    }

    public static function bombardStrenght()
    {
        if (!is_null(self::$compositeOne))
        {
          return  self::$compositeOne->bombardStrenght();
        }
        return null;
    }
}
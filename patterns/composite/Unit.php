<?php
/**
 * Created by PhpStorm.
 * User: tobimaru
 * Date: 12.09.18
 * Time: 10:26
 */
namespace Patterns\Composite;

use Exception\UnitException;

abstract class Unit
{
    public function getComposite()
    {
        return null;
    }
////    abstract function addUnit(Unit $unit);
//
//    public function addUnit(Unit $unit)
//    {
//        throw new UnitException(get_class($this) . "отностится к 'листьям'");
//    }
//
////    abstract function removeUnit(Unit $unit);
//
//    public function removeUnit (Unit $unit)
//    {
//        throw new UnitException(get_class($this) . "относится к 'листьям'");
//    }

    abstract function bombardStrenght();
}
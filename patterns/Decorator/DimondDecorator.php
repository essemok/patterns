<?php
/**
 * Created by PhpStorm.
 * User: tobimaru
 * Date: 18.09.18
 * Time: 14:04
 */
namespace Patterns\Decorator;

class DimondDecorator extends TileDecorator
{
    public function getWealthFactor()
    {
        return $this->tile->getWealthFactor() + 5;
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: tobimaru
 * Date: 18.09.18
 * Time: 12:37
 */
namespace Patterns\Decorator;

class DimondPlains extends Plains
{
    public function getWealthFactor()
    {
        return parent::getWealthFactor() + 2;
    }
}
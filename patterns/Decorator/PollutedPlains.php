<?php
/**
 * Created by PhpStorm.
 * User: tobimaru
 * Date: 18.09.18
 * Time: 12:42
 */
namespace Patterns\Decorator;

class PollutedPlains extends Plains
{
    public function getWealthFactor()
    {
        return parent::getWealthFactor() - 8;
    }
}
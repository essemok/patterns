<?php
/**
 * Created by PhpStorm.
 * User: tobimaru
 * Date: 11.09.18
 * Time: 13:14
 */
namespace Patterns\Prototype\Sea;

abstract class Sea
{
    protected $navigability = 0;

    public function __construct($navigability)
    {
        $this->navigability = $navigability;
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: tobimaru
 * Date: 05.09.18
 * Time: 10:20
 */
namespace Lesson\Work;

use Lesson\Help\CostStrategy;

abstract class Lesson
{
    private $duration;
    private $costStrategy;

    const FIXED = 1;
    const TIMED = 2;


    public function __construct($duration, CostStrategy $costStrategy)
    {
        $this->duration = $duration;
        $this->costStrategy = $costStrategy;
    }

    public function cost()
    {
        return $this->costStrategy->cost($this);
    }

    public function chargeType()
    {
        return $this->costStrategy->chargerType();
    }

    public function getDuration()
    {
        return $this->duration;
    }
}
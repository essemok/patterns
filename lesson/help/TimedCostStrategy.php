<?php
/**
 * Created by PhpStorm.
 * User: tobimaru
 * Date: 05.09.18
 * Time: 14:21
 */
namespace Lesson\Help;

use Lesson\Work\Lesson;

class TimedCostStrategy extends CostStrategy
{
    public function cost(Lesson $lesson)
    {
        return ($lesson->getDuration() * 5);
    }

    public function chargerType()
    {
        return "Почасовая оплата";
    }
}
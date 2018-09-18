<?php
/**
 * Created by PhpStorm.
 * User: tobimaru
 * Date: 05.09.18
 * Time: 14:23
 */
namespace Lesson\Help;

use Lesson\Work\Lesson;

class FixedCostStrategy extends CostStrategy
{
    public function cost(Lesson $lesson)
    {
        return 30;
    }

    public function chargerType()
    {
        return "Фиксированная оплата";
    }
}
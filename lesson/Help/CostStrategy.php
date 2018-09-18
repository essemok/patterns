<?php

namespace Lesson\Help;

use Lesson\Work\Lesson;

/**
 * Created by PhpStorm.
 * User: tobimaru
 * Date: 05.09.18
 * Time: 14:08
 */

abstract class CostStrategy
{
    abstract function cost(Lesson $lesson);
    abstract function chargerType();
}
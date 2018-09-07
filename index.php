<?php
/**
 * Created by PhpStorm.
 * User: tobimaru
 * Date: 05.09.18
 * Time: 10:40
 */

include 'vendor/autoload.php';


use Lesson\Help\FixedCostStrategy;
use Lesson\Help\TimedCostStrategy;
use Lesson\Work\Lecture;
use Lesson\Work\Seminar;

$lessons = [];
$lessons[] = new Seminar(10, new TimedCostStrategy());
$lessons[] = new Lecture(15, new FixedCostStrategy());

foreach ($lessons as $lesson) {
    print "Плата за заниятие: {$lesson->cost()}\n";
    print "Тип оплаты: {$lesson->chargeType()}\n";
    print "Продолжительность занятия: {$lesson->getDuration()}\n";
}
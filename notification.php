<?php

require_once "vendor/autoload.php";

use Lesson\Help\FixedCostStrategy;
use Lesson\Help\TimedCostStrategy;
use Lesson\Notification\RegistrationMsg;
use Lesson\Work\Lecture;
use Lesson\Work\Seminar;

$semminar = new Seminar(20, new FixedCostStrategy());
$lection = new Lecture(20, new TimedCostStrategy());

$notifire = new RegistrationMsg();
$notifire->register($semminar);
$notifire->register($lection);

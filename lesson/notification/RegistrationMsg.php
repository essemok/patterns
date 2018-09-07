<?php
/**
 * Created by PhpStorm.
 * User: tobimaru
 * Date: 05.09.18
 * Time: 17:49
 */
namespace Lesson\Notification;

use Lesson\Work\Lesson;

class RegistrationMsg
{
    public function register(Lesson $lesson)
    {
        $notifire = Notifire::getNotifire();
        $notifire->inform("цена за обучение -> {$lesson->cost()}");
    }
}
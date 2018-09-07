<?php
/**
 * Created by PhpStorm.
 * User: tobimaru
 * Date: 05.09.18
 * Time: 17:50
 */
namespace Lesson\Notification;

abstract class Notifire
{
    public static function getNotifire()
    {
        if (rand(1,2) === 1) {
            return new MailNotifire();
        } else {
            return new SmsNotifire();
        }
    }

    abstract public function inform($message);
}
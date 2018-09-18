<?php
/**
 * Created by PhpStorm.
 * User: tobimaru
 * Date: 05.09.18
 * Time: 17:58
 */
namespace Lesson\Notification;

class SmsNotifire extends Notifire
{
    public function inform($message)
    {
        print "Сообщение отправлено через смс: {$message}";
    }
}
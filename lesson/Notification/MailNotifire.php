<?php
/**
 * Created by PhpStorm.
 * User: tobimaru
 * Date: 05.09.18
 * Time: 17:54
 */
namespace Lesson\Notification;

class MailNotifire extends Notifire
{
    public function inform($message)
    {
        print "Уведомление отправлено через e-mail: {$message}\n";
    }
}
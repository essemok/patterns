<?php
/**
 * Created by PhpStorm.
 * User: tobimaru
 * Date: 21.09.18
 * Time: 12:44
 */
namespace Patterns\Observer;

class SecurityMonitor extends LoginObserver
{
    public function doUpdate(Login $login)
    {
        $status = $login->getStatus();
        print __CLASS__ . " Отправка почты системному администратору";
    }
}
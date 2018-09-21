<?php
/**
 * Created by PhpStorm.
 * User: tobimaru
 * Date: 21.09.18
 * Time: 13:10
 */
namespace Patterns\Observer;

class GeneralLoger extends LoginObserver
{
    public function doUpdate(Login $login)
    {
        $status = $login->getStatus();
        //Зарегистрируем подключение в журнале
        print __CLASS__ . " Регистрация в системном журнале\n";
    }
}
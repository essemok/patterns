<?php
/**
 * Created by PhpStorm.
 * User: tobimaru
 * Date: 21.09.18
 * Time: 14:31
 */
namespace Patterns\Observer;

class PartnershipTool extends LoginObserver
{
    public function doUpdate(Login $login)
    {
        $status = $login->getStatus();
        //проверим ip-адрес
        //отправим cookie-файл, если адрес есть в списке
        print __CLASS__ . " Отпарвка cookie-файла, если адрес есть в списке\n";
    }
}
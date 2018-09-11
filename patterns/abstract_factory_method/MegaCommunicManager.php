<?php
/**
 * Created by PhpStorm.
 * User: tobimaru
 * Date: 07.09.18
 * Time: 13:21
 */
namespace Patterns\Abstract_factory_method;

use Patterns\Abstract_factory_method\Encoders\MegaApptEncoder;
use Patterns\Abstract_factory_method\Encoders\MegaContactEncoder;
use Patterns\Abstract_factory_method\Encoders\MegaTodoEncoder;

class MegaCommunicManager extends CommunicManager
{
    const APPT = 1;
    const TODO = 2;
    const CONTACT = 3;

    public function getHeaderText()
    {
        return "Реализация вывода в верхнем колонтитуле\n";
    }

    public function make($flag_int)
    {
        switch ($flag_int){
            case self::APPT:
                return new MegaApptEncoder();
                break;
            case self::TODO:
                return new MegaTodoEncoder();
                break;
            case self::CONTACT:
                return new MegaContactEncoder();
                break;
        }
    }

//    public function getApptEncoder()
//    {
//        return new MegaApptEncoder();
//    }
//
//    public function getTodoEncoder()
//    {
//        return new MegaTodoEncoder();
//    }
//
//    public function getContactEncoder()
//    {
//        return new MegaContactEncoder();
//    }

    public function getFooterText()
    {
        return "Реализация вывода в нижем колонтитуле\n";
    }
}
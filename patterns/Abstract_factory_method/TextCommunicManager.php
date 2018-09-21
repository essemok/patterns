<?php
/**
 * Created by PhpStorm.
 * User: tobimaru
 * Date: 07.09.18
 * Time: 13:37
 */
namespace Patterns\Abstract_factory_method;

use Patterns\Abstract_factory_method\Encoders\TextApptEncoder;
use Patterns\Abstract_factory_method\Encoders\TextContactEncoder;
use Patterns\Abstract_factory_method\Encoders\TextTodoEncoder;

class TextCommunicManager extends CommunicManager
{
    const APPT      = 1;
    const TODO      = 2;
    const CONTACT   = 3;

    public function getHeaderText()
    {
        return "Реализация вывода в верхнем колонтитуле\n";
    }

    public function make($flag_int)
    {
        switch ($flag_int){
            case self::APPT:
                return new TextApptEncoder();
                break;
            case self::TODO:
                return new TextTodoEncoder();
                break;
            case self::CONTACT:
                return new TextContactEncoder();
                break;
        }
    }

//    public function getApptEncoder()
//    {
//        return new TextApptEncoder();
//    }
//
//    public function getTodoEncoder()
//    {
//        return new TextTodoEncoder();
//    }
//
//    public function getContactEncoder()
//    {
//        return new TextContactEncoder();
//    }

    public function getFooterText()
    {
        return "Реализация вывода в нижнем колонтитуле\n";
    }
}
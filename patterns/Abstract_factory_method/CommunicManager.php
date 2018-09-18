<?php
/**
 * Created by PhpStorm.
 * User: tobimaru
 * Date: 07.09.18
 * Time: 12:30
 */
namespace Patterns\Abstract_factory_method;

abstract class CommunicManager
{
    abstract function getHeaderText();

    abstract function make($flag_int);

//    abstract function getApptEncoder();
//
//    abstract function getTodoEncoder();
//
//    abstract function getContactEncoder();

    abstract function getFooterText();
}
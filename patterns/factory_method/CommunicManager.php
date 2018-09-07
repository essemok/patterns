<?php
/**
 * Created by PhpStorm.
 * User: tobimaru
 * Date: 07.09.18
 * Time: 12:30
 */
namespace Patterns\Factory_method;

abstract class CommunicManager
{
    abstract function getHeaderText();

    abstract function getApptEncoder();

    abstract function getFooterText();
}
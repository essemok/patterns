<?php
/**
 * Created by PhpStorm.
 * User: tobimaru
 * Date: 07.09.18
 * Time: 12:28
 */
namespace Patterns\Abstract_factory_method\Encoders;

class MegaApptEncoder extends ApptEncoder
{
    public function encode()
    {
        return "Данные обработанные мега енкодером!\n";
    }
}
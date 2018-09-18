<?php
/**
 * Created by PhpStorm.
 * User: tobimaru
 * Date: 07.09.18
 * Time: 14:58
 */
namespace Patterns\Abstract_factory_method\Encoders;

class MegaContactEncoder extends ContactEncoder
{
    public function encode()
    {
        return "Контактная информация закодированная Мега кодировщиком\n";
    }
}
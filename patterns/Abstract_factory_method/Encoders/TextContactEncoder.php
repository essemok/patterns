<?php
/**
 * Created by PhpStorm.
 * User: tobimaru
 * Date: 07.09.18
 * Time: 15:00
 */
namespace Patterns\Abstract_factory_method\Encoders;

class TextContactEncoder extends ContactEncoder
{
    public function encode()
    {
        return "Контактная информация закодированная текстовым кодировщиком\n";
    }
}
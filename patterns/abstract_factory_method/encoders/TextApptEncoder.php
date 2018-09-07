<?php
/**
 * Created by PhpStorm.
 * User: tobimaru
 * Date: 07.09.18
 * Time: 12:29
 */
namespace Patterns\Abstract_factory_method\Encoders;

class TextApptEncoder extends ApptEncoder
{
    public function encode()
    {
        return "Данные обработанные текстовым ендкодером\n";
    }
}
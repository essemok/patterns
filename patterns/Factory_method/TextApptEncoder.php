<?php
/**
 * Created by PhpStorm.
 * User: tobimaru
 * Date: 07.09.18
 * Time: 12:29
 */
namespace Patterns\Factory_method;

class TextApptEncoder extends ApptEncoder
{
    public function encode()
    {
        return "Данные обработанные текстовым ендкодером\n";
    }
}
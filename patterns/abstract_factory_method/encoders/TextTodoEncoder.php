<?php
/**
 * Created by PhpStorm.
 * User: tobimaru
 * Date: 07.09.18
 * Time: 14:54
 */
namespace Patterns\Abstract_factory_method\Encoders;

class TextTodoEncoder extends TodoEncoder
{
    public function encode()
    {
        return "Запланированное задание закодированное текстовым кодератором\n";
    }
}
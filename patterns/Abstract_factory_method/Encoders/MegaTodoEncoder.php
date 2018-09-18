<?php
/**
 * Created by PhpStorm.
 * User: tobimaru
 * Date: 07.09.18
 * Time: 14:48
 */
namespace Patterns\Abstract_factory_method\Encoders;

class MegaTodoEncoder extends TodoEncoder
{
    public function encode()
    {
        return "Запланированное задание закодированное Мегой\n";
    }
}
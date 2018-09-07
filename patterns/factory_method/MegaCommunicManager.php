<?php
/**
 * Created by PhpStorm.
 * User: tobimaru
 * Date: 07.09.18
 * Time: 13:21
 */
namespace Patterns\Factory_method;

class MegaCommunicManager extends CommunicManager
{
    public function getHeaderText()
    {
        return "Реализация вывода в верхнем колонтитуле\n";
    }

    public function getApptEncoder()
    {
        return new MegaApptEncoder();
    }

    public function getFooterText()
    {
        return "Реализация вывода в нижем колонтитуле\n";
    }
}
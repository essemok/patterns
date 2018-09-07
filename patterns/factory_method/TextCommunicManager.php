<?php
/**
 * Created by PhpStorm.
 * User: tobimaru
 * Date: 07.09.18
 * Time: 13:37
 */
namespace Patterns\Factory_method;

class TextCommunicManager extends CommunicManager
{
    public function getHeaderText()
    {
        return "Реализация вывода в верхнем колонтитуле\n";
    }

    public function getApptEncoder()
    {
        return new TextApptEncoder();
    }

    public function getFooterText()
    {
        return "Реализация вывода в нижнем колонтитуле\n";
    }
}
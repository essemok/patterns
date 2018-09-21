<?php
/**
 * Created by PhpStorm.
 * User: tobimaru
 * Date: 07.09.18
 * Time: 11:32
 */
namespace Patterns\Singletone;

class Settings
{
    private $preference = [];
    private static $instance = null;

    private function __construct()
    {
    }

    public static function getInstance()
    {
        if (empty(self::$instance)){
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function setPreference($name, $value)
    {
        $this->preference[$name] = $value;
    }

    public function getPreference($name)
    {
        if (isset($this->preference[$name])){
            return $this->preference[$name];
        }
        return null;
    }
}
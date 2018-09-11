<?php
/**
 * Created by PhpStorm.
 * User: tobimaru
 * Date: 07.09.18
 * Time: 11:47
 */
use Patterns\Singletone\Settings;

require_once 'vendor/autoload.php';


$a1 = Settings::getInstance();
$a1->setPreference('Имя', 'Виталий');
print $a1->getPreference('Имя') . "\n";
unset($a1);

$b1 = Settings::getInstance();
print $b1->getPreference('Имя') . "\n";

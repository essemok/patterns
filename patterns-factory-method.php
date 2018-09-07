<?php
/**
 * Created by PhpStorm.
 * User: tobimaru
 * Date: 07.09.18
 * Time: 12:37
 */

use Patterns\Factory_method\MegaCommunicManager;
use Patterns\Factory_method\TextCommunicManager;

require_once 'vendor/autoload.php';

$text = new TextCommunicManager();
$mega = new MegaCommunicManager();

print $text->getHeaderText();
print $text->getApptEncoder()->encode();
print $text->getFooterText();
print $mega->getApptEncoder()->encode();
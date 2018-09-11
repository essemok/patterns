<?php
/**
 * Created by PhpStorm.
 * User: tobimaru
 * Date: 07.09.18
 * Time: 14:40
 */

use Patterns\Abstract_factory_method\MegaCommunicManager;
use Patterns\Abstract_factory_method\TextCommunicManager;

require_once 'vendor/autoload.php';

$text = new TextCommunicManager();
print $text->make(1)->encode();
print $text->make(2)->encode();
print $text->make(3)->encode();

$mega = new MegaCommunicManager();
print $mega->make(1)->encode();
print $mega->make(2)->encode();
print $mega->make(3)->encode();

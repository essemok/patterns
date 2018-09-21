<?php
/**
 * Created by PhpStorm.
 * User: tobimaru
 * Date: 21.09.18
 * Time: 17:29
 */

use Patterns\Visitor\Army;
use Patterns\Visitor\Flamegunner;
use Patterns\Visitor\Tank;
use Patterns\Visitor\TextArmyVisitor;

require_once 'vendor/autoload.php';

$main_army = new Army();
$main_army->addUnit(new Tank());
$main_army->addUnit(new Flamegunner());
$main_army->addUnit(new Flamegunner());
$textdump = new TextArmyVisitor();
$main_army->accept($textdump);

print $textdump->getText();
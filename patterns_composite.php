<?php
/**
 * Created by PhpStorm.
 * User: tobimaru
 * Date: 12.09.18
 * Time: 14:40
 */

use Patterns\Composite\Army;
use Patterns\Composite\Flamegunner;
use Patterns\Composite\Tank;
use Patterns\Composite\UnitScript;

require_once 'vendor/autoload.php';

$mainArmy = new Army();
$mainArmy->addUnit(new Flamegunner());
$mainArmy->addUnit(new Tank());

$secondArmy = new Army();
$secondArmy->addUnit(new Tank());
$secondArmy->addUnit(new Tank());
$secondArmy->addUnit(new Tank());

$mainArmy->addUnit($secondArmy);

print "Атакующая сила: {$mainArmy->bombardStrenght()}\n";

$power = UnitScript::bombardStrenght();
print "$power\n";

UnitScript::joinExisting(new Tank(), $mainArmy);
$newPower = UnitScript::bombardStrenght();

print "$newPower\n";
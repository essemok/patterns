<?php
/**
 * Created by PhpStorm.
 * User: tobimaru
 * Date: 18.09.18
 * Time: 13:07
 */

use Patterns\Decorator\DimondDecorator;
use Patterns\Decorator\Plains;
use Patterns\Decorator\PollutedDecorator;
use Patterns\Decorator\PollutedPlains;

require_once 'vendor/autoload.php';

$plain = new Plains();
print "{$plain->getWealthFactor()}\n";

$pollutedPlain = new PollutedPlains();
print  "{$pollutedPlain->getWealthFactor()} \n\n\n";

$superPlain = new DimondDecorator(new Plains());
print "{$superPlain->getWealthFactor()}\n";

$superDuperPlain = new DimondDecorator(new PollutedDecorator(new Plains()));
print "{$superDuperPlain->getWealthFactor()}\n";
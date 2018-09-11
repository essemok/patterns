<?php
/**
 * Created by PhpStorm.
 * User: tobimaru
 * Date: 07.09.18
 * Time: 11:47
 */

use Patterns\Prototype\Forest\EarthForest;
use Patterns\Prototype\Plains\MarsPlains;
use Patterns\Prototype\Sea\EarthSea;
use Patterns\Prototype\TerrainFactory;

require_once 'vendor/autoload.php';

$prototype = new TerrainFactory(new EarthSea(2), new MarsPlains(), new EarthForest());

//$prototype->getSea()->universeCall();
var_dump($prototype->getSea());
echo "\n";
var_dump($prototype->getPlains());
echo "\n";
var_dump($prototype->getForest());



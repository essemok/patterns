<?php
/**
 * Created by PhpStorm.
 * User: tobimaru
 * Date: 18.09.18
 * Time: 16:26
 */

use Patterns\Facade\ProductFacade;

require_once 'vendor/autoload.php';

$facade = new ProductFacade('tmp/test.txt');
$productInf = $facade->getProduct(748);

echo "$productInf->id\n";
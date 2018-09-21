<?php
/**
 * Created by PhpStorm.
 * User: tobimaru
 * Date: 21.09.18
 * Time: 12:48
 */

use Patterns\Observer\GeneralLoger;
use Patterns\Observer\Login;
use Patterns\Observer\PartnershipTool;
use Patterns\Observer\SecurityMonitor;

require_once 'vendor/autoload.php';

$login = new Login();
new SecurityMonitor($login);
new GeneralLoger($login);
new PartnershipTool($login);
$login->notify();
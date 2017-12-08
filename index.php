<?php 
// composer autoloader for required packages and dependencies
require_once('lib/autoload.php');

/** @var \Base $f3 */
$f3 = \Base::instance();
$f3->set('views','app/view/');
$f3->set('DEBUG','3');
$f3->set('XFRAME','');

// F3 autoloader for application business code
$f3->set('AUTOLOAD', 'app/');

$f3->route('GET /@client','Controller\Build->clientMap');

$f3->run();
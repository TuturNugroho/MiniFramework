<?php

// namespace OOP\App;
//require_once "TrxHeaderController.php";
require_once __DIR__.'/vendor/autoload.php';

use OOP\App\TrxHeadersController;

$controller = new TrxHeadersController;

switch (@$_GET['page']) {
    case 'show':
        $controller->show($_GET['id']);
        break;
    default:
        $controller->index();
        break;
}

<?php
declare(strict_types=1);

// don't remove this
use Models\HomeController;

//removed redundant code

// this gets the page
require_once('Models/HomeController.php');

$page = $_GET['page'] ?? 'dashboard';
$controller = new HomeController();

// pages switch for nav
switch ($page) {
    case 'data':
        $controller->data();
        break;
    case 'visualisations':
        $controller->visualisations();
        break;
    case 'compare':
        $controller->compare();
        break;
    case 'benchmarks':
        $controller->benchmarks();
        break;
    default:
        $controller->index();
        break;
}

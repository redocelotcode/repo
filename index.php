<?php
declare(strict_types=1);

spl_autoload_register(function ($class) {
    $controllerPath = __DIR__ . '/../app/controllers/' . $class . '.php';
    if (file_exists($controllerPath)) {
        require_once $controllerPath;
    }
});

$page = $_GET['page'] ?? 'dashboard';
$controller = new HomeController();

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

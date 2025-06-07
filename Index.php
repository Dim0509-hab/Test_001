<?php
define('APP_PATH', __DIR__ . '/app');

if (!extension_loaded('gd')) {
    die('GD extension is not loaded');
}

// Получаем URL
$url = isset($_GET['url']) ? explode('/', rtrim($_GET['url'], '/')) : [];

// Определяем контроллер и метод
$controllerName = $url[0] . 'Controller';
$action = isset($url[1]) ? $url[1] : 'index';

// Путь к контроллеру
$controllerPath = APP_PATH . '/controllers/' . $controllerName . '.php';

// Если контроллер не существует, используем ErrorController
if (!file_exists($controllerPath)) {
    $controllerName = 'ErrorController';
    $action = 'index';
    $controllerPath = APP_PATH . '/controllers/ErrorController.php';
}

require_once $controllerPath;

$controller = new $controllerName();
if (method_exists($controller, $action)) {
    $controller->$action();
} else {
    $controller->index();
}

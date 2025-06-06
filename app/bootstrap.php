<?php
define('ROOT_PATH', __DIR__);

// Автозагрузка классов
spl_autoload_register(function ($class) {
 $file = ROOT_PATH. '/'. str_replace('\\', '/', $class). '.php';
 if (file_exists($file)) {
 require_once $file;
 }
});

// Подключение конфигурации
require_once __DIR__. '/../config/config.php';

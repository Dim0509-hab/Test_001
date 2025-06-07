<?php
// Инициализация автозагрузки классов
spl_autoload_register(function ($class) {
    $file = 'application/core/' . $class . '.php';
    if (file_exists($file)) {
        require_once $file;
    }
});

// Базовые классы
require_once 'application/core/Controller.php';
require_once 'application/core/Model.php';
require_once 'application/core/View.php';

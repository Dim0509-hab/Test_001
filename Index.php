<?php
// Подключение начальной конфигурации
require_once 'bootstrap.php';

// Получение URL
$url = isset($_GET['url']) ? $_GET['url'] : '';

// Инициализация контроллера
$controller = new Controller();
$controller->load($url);

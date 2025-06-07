<?php
class Controller {
    protected $view;
    
    public function __construct() {
        $this->view = new View();
    }
    
    public function load($url) {
        // Разбиваем URL на части
        $url = explode('/', $url);
        
        // Определяем контроллер и метод
        $controller = $url[0] ? $url[0] : 'Main';
        $action = isset($url[1]) ? $url[1] : 'index';
        
        // Формируем имена файлов
        $controllerFile = 'application/controllers/' . $controller . 'Controller.php';
        $controllerClass = $controller . 'Controller';
        
        // Проверяем существование контроллера
        if (file_exists($controllerFile)) {
            require_once $controllerFile;
            
            if (class_exists($controllerClass)) {
                $controller = new $controllerClass();
                
                if (method_exists($controller, $action)) {
                    $controller->$action();
                } else {
                    $this->view->render('error/404');
                }
            } else {
                $this->view->render('error/404');
            }
        } else {
            $this->view->render('error/404');
        }
    }
}

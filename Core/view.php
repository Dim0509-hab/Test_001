<?php
class View {
    public function render($view, $data = []) {
        extract($data);
        
        $file = 'application/views/' . $view . '.php';
        
        if (file_exists($file)) {
            require_once $file;
        } else {
            throw new Exception('View not found');
        }
    }
}

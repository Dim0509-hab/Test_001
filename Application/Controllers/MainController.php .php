<?php
class MainController extends Controller {
    public function index() {
        $data = [
            'title' => 'Главная страница',
            'content' => 'Добро пожаловать на сайт DimuA!'
        ];
        
        $this->view->render('main/index', $data);
    }
}

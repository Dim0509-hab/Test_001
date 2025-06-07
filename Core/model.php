<?php
class Model {
    protected $db;
    
    public function __construct() {
        // Подключение к базе данных
        $this->db = new PDO('mysql:host=localhost;dbname=dimua', 'user', 'password');
    }
}

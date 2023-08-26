<?php

require_once './src/models/Employee.php';

class HomeController {

    public function index() {
        $data = Employee::getAll();
        $this->loadView('./src/views/home.php', compact('data'));
    }

    private function loadView($view, $vars = []) {
        extract($vars);
        ob_start();
        include $view;
        echo ob_get_clean();
    }

    public function delete($id) {
        Employee::delete($id);
        header("Location: index.php"); 
    }
    
    
}

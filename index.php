<?php

require_once './src/controllers/HomeController.php';
require_once './src/models/Employee.php';
require_once './src/models/connection.php';



$controller = new HomeController();

if (isset($_GET['action']) && $_GET['action'] === 'delete' && isset($_GET['id'])) {
    $controller->delete($_GET['id']);
} else {
    $controller->index();
}

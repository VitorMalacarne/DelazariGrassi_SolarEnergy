<?php

require_once '../config/database.php';
require_once '../app/models/Database.php';

// Basic routing
$controller = $_GET['controller'] ?? 'customer';
$action     = $_GET['action'] ?? 'index';
$id         = $_GET['id'] ?? null;

$controllerName = ucfirst($controller) . 'Controller';
$controllerFile = "../app/controllers/{$controllerName}.php";

if (!file_exists($controllerFile)) {
    die('Controller not found');
}

require_once $controllerFile;

$controllerObject = new $controllerName();

if (!method_exists($controllerObject, $action)) {
    die('Action not found');
}

$controllerObject->$action($id);

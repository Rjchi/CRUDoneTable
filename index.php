<?php

require_once 'controller/ClienteController.php';

$controller = new ClienteController();

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['action']) && $_GET['action'] === 'index') {
        $controller->index();
    } elseif (isset($_GET['action']) && $_GET['action'] === 'delete' && isset($_GET['id'])) {
        $controller->delete($_GET['id']);
    }
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['action'])) {
        if ($_POST['action'] === 'create') {
            $controller->create($_POST['nombre'], $_POST['apellido'], $_POST['correoElectronico'], $_POST['contrasenia']);
        } elseif ($_POST['action'] === 'update' && isset($_POST['id'])) {
            $controller->update($_POST['id'], $_POST['nombre'], $_POST['apellido'], $_POST['correoElectronico'], $_POST['contrasenia']);
        }
    }
}

?>

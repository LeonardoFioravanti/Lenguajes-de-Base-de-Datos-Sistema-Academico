<?php
$view = $_GET['view'] ?? 'login';

switch ($view) {
    case 'usuarios':
        require '../app/controllers/UsuarioController.php';
        $controller = new UsuariosController();
        $controller->index();
        break;

    case 'panel':
        require '../app/views/panel.php';
        break;

    case 'login':
    default:
        require '../app/views/login.php';
        break;
}

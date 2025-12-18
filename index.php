<?php
require_once __DIR__ . '/../app/config/db.php';
session_start();

$view = $_GET['view'] ?? 'login';

switch ($view) {
    case 'usuarios':
        require '../app/controllers/UsuarioController.php';
        $controller = new UsuariosController();
        $controller->index();
        break;
        

case 'matricula_estudiante':
    require_once __DIR__ . '/../app/views/matricula_estudiante.php';
    break;

case 'biblioteca_estudiante':
    require_once __DIR__ . '/../app/views/biblioteca_estudiante.php';
    break;



    case 'panel':
        require_once __DIR__ . '/../app/views/panel.php';
        break;

    case 'login':
    default:
        require '../app/views/login.php';
        break;
    
    
    }
?>
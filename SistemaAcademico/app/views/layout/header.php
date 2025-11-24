<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Académico</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

        /* SIDEBAR */
        #sidebar {
            min-width: 240px;
            max-width: 240px;
            background-color: #0d47a1;
            color: white;
            height: 100vh;
        }

        #sidebar a {
            color: #fff;
            text-decoration: none;
            padding: 12px 18px;
            display: block;
        }

        #sidebar a:hover {
            background-color: rgba(255,255,255,0.15);
        }

        @media (max-width: 768px) {
            #sidebar {
                position: absolute;
                z-index: 999;
                height: 100%;
                transform: translateX(-100%);
                transition: transform .3s ease;
            }
            #sidebar.show {
                transform: translateX(0);
            }
        }

        /* Contenedor principal horizontal */
        .layout {
            display: flex;
            flex-direction: row;
        }

        .contenido {
            flex: 1;
            padding: 20px;
        }
    </style>
</head>

<body class="bg-light">

<!-- HEADER PRINCIPAL -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <button class="btn btn-primary d-md-none" onclick="toggleSidebar()">☰</button>
        <a class="navbar-brand ms-2" href="#">Sistema Académico</a>
    </div>
</nav>
<main class="layout">

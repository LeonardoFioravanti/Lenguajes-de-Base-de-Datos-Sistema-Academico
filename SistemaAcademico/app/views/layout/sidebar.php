<?php
// Iniciar sesión si no existe
if (!isset($_SESSION)) {
    session_start();
}

$rol = $_SESSION['usuario']['rol'];   // 1=Admin, 2=Profesor, 3=Estudiante
?>

<button class="btn btn-primary d-md-none m-2" onclick="toggleSidebar()">
    ☰ Menú
</button>

<div id="sidebar">
    <h4 class="p-3 mb-3">Menú</h4>

    <!-- INICIO (todos los roles) -->
    <?php if ($rol == 1): ?>
        <a href="/SistemaAcademico/app/views/panel_admin.php">Inicio</a>
    <?php elseif ($rol == 2): ?>
        <a href="/SistemaAcademico/app/views/panel_profesor.php">Inicio</a>
    <?php else: ?>
        <a href="/SistemaAcademico/app/views/panel_estudiante.php">Inicio</a>
    <?php endif; ?>

    <!-- SOLO ADMIN -->
    <?php if ($rol == 1): ?>
        <button class="btn w-100 text-start text-white" 
                type="button" 
                data-bs-toggle="collapse" 
                data-bs-target="#adminMenu"
                style="background:none; border:none; padding:12px 18px;">
            Administración ▼
        </button>

        <div class="collapse" id="adminMenu">
            <a href="/SistemaAcademico/app/views/usuarios.php" class="ps-4">Usuarios</a>
            <a href="/SistemaAcademico/app/views/carreras.php" class="ps-4">Carreras</a>
            <a href="/SistemaAcademico/app/views/curso.php" class="ps-4">Cursos</a>
            <a href="/SistemaAcademico/app/views/grupos.php" class="ps-4">Grupos</a>
            <a href="/SistemaAcademico/app/views/horario.php" class="ps-4">Horarios</a>
            <a href="/SistemaAcademico/app/views/biblioteca_admin.php" class="ps-4">Biblioteca (Admin)</a>
            <a href="#" class="ps-4">Reportes</a>
        </div>

        <hr class="text-white">
    <?php endif; ?>

    <!-- SOLO ESTUDIANTE -->
    <?php if ($rol == 3): ?>
        <a href="/SistemaAcademico/app/views/matricula_estudiante.php">Matrícula</a>
        <a href="/SistemaAcademico/app/views/biblioteca_estudiante.php">Biblioteca</a>
    <?php endif; ?>

    <!-- SOLO PROFESOR -->
    <?php if ($rol == 2): ?>
        <a href="#">Mis Cursos</a>
        <a href="#">Asistencia</a>
        <a href="#">Notas</a>
    <?php endif; ?>

    <hr class="text-white">

    <!-- CERRAR SESIÓN (todos los roles) -->
    <a href="/SistemaAcademico/app/controllers/logout.php" class="ps-4 text-danger">Cerrar Sesión</a>
</div>

<script>
function toggleSidebar() {
    let bar = document.getElementById("sidebar");
    bar.classList.toggle("show");
}
</script>

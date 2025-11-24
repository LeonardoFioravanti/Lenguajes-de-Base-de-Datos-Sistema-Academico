<?php
session_start();
if (!isset($_SESSION['usuario']) || $_SESSION['usuario']['rol'] != 2) {
    header("Location: ../../public/index.php?view=login");
    exit();
}
?>

<?php include "./layout/header.php"; ?>
<?php include "./layout/sidebar.php"; ?>

<div id="content" class="p-4">

    <h3 class="mb-4">Bienvenido Profesor, <?php echo $_SESSION['usuario']['nombreUsuario']; ?></h3>

    <div class="row g-4">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-body">
                    <h5>Mis Cursos</h5>
                    <p>Ver grupos asignados.</p>
                    <a href="#" class="btn btn-primary w-100">Ver cursos</a>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-body">
                    <h5>Ingresar Calificaciones</h5>
                    <p>Registrar notas de estudiantes.</p>
                    <a href="#" class="btn btn-primary w-100">Ir al módulo</a>
                </div>
            </div>
        </div>
    </div>

</div>

<?php include "./layout/footer.php"; ?>

<?php
session_start();
if (!isset($_SESSION['usuario']) || $_SESSION['usuario']['rol'] != 3) {
    header("Location: ../../public/index.php?view=login");
    exit();
}
?>

<?php include "./layout/header.php"; ?>
<?php include "./layout/sidebar.php"; ?>

<div id="content" class="p-4">

    <h4 class="mb-4">Bienvenido Estudiante, <?php echo $_SESSION['usuario']['nombreUsuario']; ?></h4>

    <div class="row g-4">
        <div class="col-md-4">
            <div class="card shadow">
                <div class="card-body">
                    <h5>Mis Cursos</h5>
                    <p>Cursos matriculados.</p>
                    <a href="#" class="btn btn-success w-100">Ver cursos</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow">
                <div class="card-body">
                    <h5>Mi Horario</h5>
                    <p>Consulta tu horario.</p>
                    <a href="#" class="btn btn-success w-100">Ver horario</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow">
                <div class="card-body">
                    <h5>Notas</h5>
                    <p>Consulta tus calificaciones.</p>
                    <a href="#" class="btn btn-success w-100">Ver notas</a>
                </div>
            </div>
        </div>
    </div>

</div>

<?php include "./layout/footer.php"; ?>

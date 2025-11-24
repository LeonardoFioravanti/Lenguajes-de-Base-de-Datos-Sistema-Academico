<?php
session_start();
if (!isset($_SESSION['usuario']) || $_SESSION['usuario']['rol'] != 1) {
    header("Location: ../../public/index.php?view=login");
    exit();
}
?>

<?php include "./layout/header.php"; ?>
<?php include "./layout/sidebar.php"; ?>

<div id="content" class="p-4">
    <h3 class="mb-4">Bienvenido Administrador, <?php echo $_SESSION['usuario']['nombreUsuario']; ?></h3>

    <div class="row g-4">

        <div class="col-md-4">
            <div class="card shadow">
                <div class="card-body">
                    <h5>Gestión de Usuarios</h5>
                    <p>Crear, editar y eliminar usuarios.</p>
                    <a href="usuarios.php" class="btn btn-primary w-100">Ir al módulo</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow">
                <div class="card-body">
                    <h5>Carreras y Cursos</h5>
                    <p>Administrar carreras, cursos y grupos.</p>
                    <a href="carreras.php" class="btn btn-primary w-100">Ir al módulo</a>
                </div>
            </div>
        </div>

    </div>
</div>

<?php include "./layout/footer.php"; ?>

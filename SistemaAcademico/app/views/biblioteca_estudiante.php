<?php require_once "layout/header.php"; ?>
<?php require_once "layout/sidebar.php"; ?>

<div class="contenido">

    <h3>Catálogo de Biblioteca</h3>

    <!-- BUSCADOR -->
    <div class="card shadow-sm mb-3">
        <div class="card-body">
            <input type="text" class="form-control" placeholder="Buscar por título o autor...">
        </div>
    </div>

    <!-- TABLA DE LIBROS PARA ESTUDIANTES -->
    <div class="card shadow-sm">
        <div class="card-body">

            <table class="table table-hover align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>Título</th>
                        <th>Autor</th>
                        <th>Categoría</th>
                        <th>Estado</th>
                        <th>Acción</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>Introducción a la Programación</td>
                        <td>J. Pérez</td>
                        <td>Computación</td>
                        <td><span class="badge bg-success">Disponible</span></td>
                        <td>
                            <button class="btn btn-primary btn-sm">Solicitar Préstamo</button>
                        </td>
                    </tr>

                    <tr>
                        <td>Psicología Moderna</td>
                        <td>M. López</td>
                        <td>Psicología</td>
                        <td><span class="badge bg-secondary">Prestado</span></td>
                        <td>
                            <button class="btn btn-secondary btn-sm" disabled>No disponible</button>
                        </td>
                    </tr>

                </tbody>
            </table>

        </div>
    </div>

</div>

<?php require_once "layout/footer.php"; ?>

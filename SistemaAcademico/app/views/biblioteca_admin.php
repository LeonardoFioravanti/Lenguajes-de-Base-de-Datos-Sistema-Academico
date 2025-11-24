<?php require_once "layout/header.php"; ?>
<?php require_once "layout/sidebar.php"; ?>

<div class="contenido">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3>Biblioteca - Administración</h3>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalAgregarLibro">
            + Agregar Libro
        </button>
    </div>

    <!-- TABLA DE LIBROS -->
    <div class="card shadow-sm">
        <div class="card-body">

            <table class="table table-hover align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Título</th>
                        <th>Autor</th>
                        <th>Categoría</th>
                        <th>Año</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>

                <tbody>
                    <!-- EJEMPLOS -->
                    <tr>
                        <td>1</td>
                        <td>Introducción a la Programación</td>
                        <td>J. Pérez</td>
                        <td>Computación</td>
                        <td>2020</td>
                        <td><span class="badge bg-success">Disponible</span></td>
                        <td>
                            <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditarLibro">Editar</button>
                            <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalEliminarLibro">Eliminar</button>
                        </td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>Psicología Moderna</td>
                        <td>M. López</td>
                        <td>Psicología</td>
                        <td>2018</td>
                        <td><span class="badge bg-secondary">Prestado</span></td>
                        <td>
                            <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditarLibro">Editar</button>
                            <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalEliminarLibro">Eliminar</button>
                        </td>
                    </tr>

                </tbody>
            </table>

        </div>
    </div>
</div>

<!-- MODAL AGREGAR LIBRO -->
<div class="modal fade" id="modalAgregarLibro" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title">Agregar Libro</h5>
                <button class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <form>
                    <label>Título:</label>
                    <input type="text" class="form-control mb-2">

                    <label>Autor:</label>
                    <input type="text" class="form-control mb-2">

                    <label>Categoría:</label>
                    <input type="text" class="form-control mb-2">

                    <label>Año de Publicación:</label>
                    <input type="number" class="form-control mb-2">

                    <label>Estado:</label>
                    <select class="form-control mb-2">
                        <option>Disponible</option>
                        <option>Prestado</option>
                        <option>Dañado</option>
                    </select>
                </form>
            </div>

            <div class="modal-footer">
                <button class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button class="btn btn-primary">Guardar</button>
            </div>

        </div>
    </div>
</div>

<!-- MODAL EDITAR -->
<div class="modal fade" id="modalEditarLibro" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header bg-warning">
                <h5 class="modal-title">Editar Libro</h5>
                <button class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <form>
                    <label>Título:</label>
                    <input type="text" class="form-control mb-2" value="Introducción a la Programación">

                    <label>Autor:</label>
                    <input type="text" class="form-control mb-2" value="J. Pérez">

                    <label>Categoría:</label>
                    <input type="text" class="form-control mb-2" value="Computación">

                    <label>Año:</label>
                    <input type="number" class="form-control mb-2" value="2020">

                    <label>Estado:</label>
                    <select class="form-control mb-2">
                        <option>Disponible</option>
                        <option>Prestado</option>
                        <option>Dañado</option>
                    </select>
                </form>
            </div>

            <div class="modal-footer">
                <button class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button class="btn btn-warning">Actualizar</button>
            </div>

        </div>
    </div>
</div>

<!-- MODAL ELIMINAR -->
<div class="modal fade" id="modalEliminarLibro" tabindex="-1">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">

            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title">Eliminar Libro</h5>
                <button class="btn-close text-white" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body text-center">
                <p>¿Desea eliminar este libro?</p>
            </div>

            <div class="modal-footer">
                <button class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Cancelar</button>
                <button class="btn btn-danger btn-sm">Eliminar</button>
            </div>

        </div>
    </div>
</div>

<?php require_once "layout/footer.php"; ?>

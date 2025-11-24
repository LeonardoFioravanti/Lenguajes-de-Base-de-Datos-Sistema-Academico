<?php require_once "layout/header.php"; ?>
<?php require_once "layout/sidebar.php"; ?>

<div class="contenido">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3>Carreras</h3>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCrearCarrera">
            + Crear Carrera
        </button>
    </div>

    <!-- TABLA DE CARRERAS -->
    <div class="card shadow-sm">
        <div class="card-body">

            <table class="table table-hover align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Carrera</th>
                        <th>Facultad</th>
                        <th>Acciones</th>
                    </tr>
                </thead>

                <tbody>
                    <!-- DATOS DE EJEMPLO -->
                    <tr>
                        <td>1</td>
                        <td>Ingeniería en Sistemas</td>
                        <td>Facultad de Ingeniería</td>
                        <td>
                            <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditarCarrera">
                                Editar
                            </button>
                            <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalEliminarCarrera">
                                Eliminar
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>Administración de Empresas</td>
                        <td>Facultad de Negocios</td>
                        <td>
                            <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditarCarrera">
                                Editar
                            </button>
                            <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalEliminarCarrera">
                                Eliminar
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>Psicología</td>
                        <td>Facultad de Ciencias Sociales</td>
                        <td>
                            <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditarCarrera">
                                Editar
                            </button>
                            <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalEliminarCarrera">
                                Eliminar
                            </button>
                        </td>
                    </tr>

                </tbody>
            </table>

        </div>
    </div>

</div>


<!-- MODAL: CREAR CARRERA -->
<div class="modal fade" id="modalCrearCarrera" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title">Crear Nueva Carrera</h5>
                <button class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <form>

                    <label>Nombre de la Carrera:</label>
                    <input type="text" class="form-control mb-2" placeholder="Ej: Ingeniería Industrial">

                    <label>Facultad:</label>
                    <input type="text" class="form-control mb-2" placeholder="Ej: Facultad de Ingeniería">

                </form>
            </div>

            <div class="modal-footer">
                <button class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button class="btn btn-primary">Guardar</button>
            </div>

        </div>
    </div>
</div>


<!-- MODAL: EDITAR CARRERA -->
<div class="modal fade" id="modalEditarCarrera" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header bg-warning">
                <h5 class="modal-title">Editar Carrera</h5>
                <button class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <form>

                    <label>Nombre:</label>
                    <input type="text" class="form-control mb-2" value="Ingeniería en Sistemas">

                    <label>Facultad:</label>
                    <input type="text" class="form-control mb-2" value="Facultad de Ingeniería">

                </form>
            </div>

            <div class="modal-footer">
                <button class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button class="btn btn-warning">Actualizar</button>
            </div>

        </div>
    </div>
</div>


<!-- MODAL: ELIMINAR CARRERA -->
<div class="modal fade" id="modalEliminarCarrera" tabindex="-1">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">

            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title">Eliminar Carrera</h5>
                <button class="btn-close text-white" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body text-center">
                <p>¿Desea eliminar esta carrera?</p>
            </div>

            <div class="modal-footer">
                <button class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Cancelar</button>
                <button class="btn btn-danger btn-sm">Eliminar</button>
            </div>

        </div>
    </div>
</div>


<?php require_once "layout/footer.php"; ?>

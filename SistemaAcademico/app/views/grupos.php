<?php require_once "layout/header.php"; ?>
<?php require_once "layout/sidebar.php"; ?>

<div class="contenido">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3>Grupos</h3>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCrearGrupo">
            + Crear Grupo
        </button>
    </div>

    <!-- TABLA DE GRUPOS -->
    <div class="card shadow-sm">
        <div class="card-body">

            <table class="table table-hover align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Curso</th>
                        <th>Grupo</th>
                        <th>Profesor</th>
                        <th>Cupo</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>

                <tbody>
                    <!-- DATOS DE EJEMPLO -->
                    <tr>
                        <td>1</td>
                        <td>Programación I</td>
                        <td>Grupo 01</td>
                        <td>Juan Pérez</td>
                        <td>30</td>
                        <td><span class="badge bg-success">Activo</span></td>
                        <td>
                            <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditarGrupo">
                                Editar
                            </button>
                            <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalEliminarGrupo">
                                Eliminar
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>Bases de Datos</td>
                        <td>Grupo A</td>
                        <td>María López</td>
                        <td>25</td>
                        <td><span class="badge bg-success">Activo</span></td>
                        <td>
                            <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditarGrupo">
                                Editar
                            </button>
                            <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalEliminarGrupo">
                                Eliminar
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>Psicología General</td>
                        <td>Grupo B</td>
                        <td>Carlos Díaz</td>
                        <td>20</td>
                        <td><span class="badge bg-secondary">Inactivo</span></td>
                        <td>
                            <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditarGrupo">
                                Editar
                            </button>
                            <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalEliminarGrupo">
                                Eliminar
                            </button>
                        </td>
                    </tr>

                </tbody>
            </table>

        </div>
    </div>

</div>


<!-- MODAL: CREAR GRUPO -->
<div class="modal fade" id="modalCrearGrupo" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title">Crear Nuevo Grupo</h5>
                <button class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <form>

                    <label>Curso:</label>
                    <select class="form-control mb-2">
                        <option>Programación I</option>
                        <option>Bases de Datos</option>
                        <option>Psicología General</option>
                    </select>

                    <label>Código del Grupo:</label>
                    <input type="text" class="form-control mb-2" placeholder="Ej: Grupo 01, G1, A">

                    <label>Profesor Asignado:</label>
                    <select class="form-control mb-2">
                        <option>Juan Pérez</option>
                        <option>María López</option>
                        <option>Carlos Díaz</option>
                    </select>

                    <label>Cupo:</label>
                    <input type="number" class="form-control mb-2" placeholder="Ej: 30">

                    <label>Estado:</label>
                    <select class="form-control mb-2">
                        <option>Activo</option>
                        <option>Inactivo</option>
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


<!-- MODAL: EDITAR GRUPO -->
<div class="modal fade" id="modalEditarGrupo" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header bg-warning">
                <h5 class="modal-title">Editar Grupo</h5>
                <button class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <form>

                    <label>Curso:</label>
                    <select class="form-control mb-2">
                        <option>Programación I</option>
                        <option>Bases de Datos</option>
                        <option>Psicología General</option>
                    </select>

                    <label>Grupo:</label>
                    <input type="text" class="form-control mb-2" value="Grupo 01">

                    <label>Profesor:</label>
                    <select class="form-control mb-2">
                        <option>Juan Pérez</option>
                        <option>María López</option>
                        <option>Carlos Díaz</option>
                    </select>

                    <label>Cupo:</label>
                    <input type="number" class="form-control mb-2" value="30">

                    <label>Estado:</label>
                    <select class="form-control mb-2">
                        <option>Activo</option>
                        <option>Inactivo</option>
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


<!-- MODAL: ELIMINAR GRUPO -->
<div class="modal fade" id="modalEliminarGrupo" tabindex="-1">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">

            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title">Eliminar Grupo</h5>
                <button class="btn-close text-white" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body text-center">
                <p>¿Desea eliminar este grupo?</p>
            </div>

            <div class="modal-footer">
                <button class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Cancelar</button>
                <button class="btn btn-danger btn-sm">Eliminar</button>
            </div>

        </div>
    </div>
</div>


<?php require_once "layout/footer.php"; ?>

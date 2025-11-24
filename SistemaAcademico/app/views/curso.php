<?php require_once "layout/header.php"; ?>
<?php require_once "layout/sidebar.php"; ?>

<div class="contenido">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3>Cursos</h3>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCrearCurso">
            + Crear Curso
        </button>
    </div>

    <!-- TABLA DE CURSOS -->
    <div class="card shadow-sm">
        <div class="card-body">

            <table class="table table-hover align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Código</th>
                        <th>Curso</th>
                        <th>Carrera</th>
                        <th>Créditos</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>

                <tbody>
                    <!-- DATOS DE EJEMPLO -->
                    <tr>
                        <td>1</td>
                        <td>SIS-101</td>
                        <td>Programación I</td>
                        <td>Ingeniería en Sistemas</td>
                        <td>4</td>
                        <td><span class="badge bg-success">Activo</span></td>
                        <td>
                            <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditarCurso">
                                Editar
                            </button>
                            <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalEliminarCurso">
                                Eliminar
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>ADM-202</td>
                        <td>Contabilidad</td>
                        <td>Administración de Empresas</td>
                        <td>3</td>
                        <td><span class="badge bg-success">Activo</span></td>
                        <td>
                            <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditarCurso">
                                Editar
                            </button>
                            <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalEliminarCurso">
                                Eliminar
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>PSI-110</td>
                        <td>Introducción a la Psicología</td>
                        <td>Psicología</td>
                        <td>3</td>
                        <td><span class="badge bg-secondary">Inactivo</span></td>
                        <td>
                            <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditarCurso">
                                Editar
                            </button>
                            <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalEliminarCurso">
                                Eliminar
                            </button>
                        </td>
                    </tr>

                </tbody>
            </table>

        </div>
    </div>

</div>


<!-- MODAL: CREAR CURSO -->
<div class="modal fade" id="modalCrearCurso" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title">Crear Nuevo Curso</h5>
                <button class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <form>

                    <label>Código del Curso:</label>
                    <input type="text" class="form-control mb-2" placeholder="Ej: SIS-301">

                    <label>Nombre del Curso:</label>
                    <input type="text" class="form-control mb-2" placeholder="Ej: Base de Datos">

                    <label>Carrera Asociada:</label>
                    <select class="form-control mb-2">
                        <option>Ingeniería en Sistemas</option>
                        <option>Administración de Empresas</option>
                        <option>Psicología</option>
                    </select>

                    <label>Créditos:</label>
                    <input type="number" class="form-control mb-2" placeholder="Ej: 4">

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


<!-- MODAL: EDITAR CURSO -->
<div class="modal fade" id="modalEditarCurso" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header bg-warning">
                <h5 class="modal-title">Editar Curso</h5>
                <button class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <form>

                    <label>Código del Curso:</label>
                    <input type="text" class="form-control mb-2" value="SIS-101">

                    <label>Nombre del Curso:</label>
                    <input type="text" class="form-control mb-2" value="Programación I">

                    <label>Carrera:</label>
                    <select class="form-control mb-2">
                        <option>Ingeniería en Sistemas</option>
                        <option>Administración de Empresas</option>
                        <option>Psicología</option>
                    </select>

                    <label>Créditos:</label>
                    <input type="number" class="form-control mb-2" value="4">

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


<!-- MODAL: ELIMINAR CURSO -->
<div class="modal fade" id="modalEliminarCurso" tabindex="-1">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">

            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title">Eliminar Curso</h5>
                <button class="btn-close text-white" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body text-center">
                <p>¿Desea eliminar este curso?</p>
            </div>

            <div class="modal-footer">
                <button class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Cancelar</button>
                <button class="btn btn-danger btn-sm">Eliminar</button>
            </div>

        </div>
    </div>
</div>


<?php require_once "layout/footer.php"; ?>

<?php require_once "layout/header.php"; ?>
<?php require_once "layout/sidebar.php"; ?>

<div class="contenido">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3>Horarios</h3>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCrearHorario">
            + Crear Horario
        </button>
    </div>

    <!-- TABLA DE HORARIOS -->
    <div class="card shadow-sm">
        <div class="card-body">

            <table class="table table-hover align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Curso</th>
                        <th>Grupo</th>
                        <th>Día</th>
                        <th>Hora Inicio</th>
                        <th>Hora Fin</th>
                        <th>Aula</th>
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
                        <td>Lunes</td>
                        <td>08:00</td>
                        <td>10:00</td>
                        <td>Aula 12</td>
                        <td><span class="badge bg-success">Activo</span></td>
                        <td>
                            <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditarHorario">
                                Editar
                            </button>
                            <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalEliminarHorario">
                                Eliminar
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>Bases de Datos</td>
                        <td>Grupo A</td>
                        <td>Miércoles</td>
                        <td>10:00</td>
                        <td>12:00</td>
                        <td>Aula 5</td>
                        <td><span class="badge bg-success">Activo</span></td>
                        <td>
                            <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditarHorario">
                                Editar
                            </button>
                            <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalEliminarHorario">
                                Eliminar
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>Psicología General</td>
                        <td>Grupo B</td>
                        <td>Viernes</td>
                        <td>13:00</td>
                        <td>15:00</td>
                        <td>Aula 2</td>
                        <td><span class="badge bg-secondary">Inactivo</span></td>
                        <td>
                            <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditarHorario">
                                Editar
                            </button>
                            <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalEliminarHorario">
                                Eliminar
                            </button>
                        </td>
                    </tr>

                </tbody>
            </table>

        </div>
    </div>

</div>


<!-- MODAL: CREAR HORARIO -->
<div class="modal fade" id="modalCrearHorario" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title">Crear Nuevo Horario</h5>
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
                    <select class="form-control mb-2">
                        <option>Grupo 01</option>
                        <option>Grupo A</option>
                        <option>Grupo B</option>
                    </select>

                    <label>Día:</label>
                    <select class="form-control mb-2">
                        <option>Lunes</option>
                        <option>Martes</option>
                        <option>Miércoles</option>
                        <option>Jueves</option>
                        <option>Viernes</option>
                    </select>

                    <label>Hora Inicio:</label>
                    <input type="time" class="form-control mb-2">

                    <label>Hora Fin:</label>
                    <input type="time" class="form-control mb-2">

                    <label>Aula:</label>
                    <input type="text" class="form-control mb-2" placeholder="Ej: Aula 12">

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


<!-- MODAL: EDITAR HORARIO -->
<div class="modal fade" id="modalEditarHorario" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header bg-warning">
                <h5 class="modal-title">Editar Horario</h5>
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
                    <select class="form-control mb-2">
                        <option>Grupo 01</option>
                        <option>Grupo A</option>
                        <option>Grupo B</option>
                    </select>

                    <label>Día:</label>
                    <select class="form-control mb-2">
                        <option>Lunes</option>
                        <option>Miércoles</option>
                        <option>Viernes</option>
                    </select>

                    <label>Hora Inicio:</label>
                    <input type="time" class="form-control mb-2" value="08:00">

                    <label>Hora Fin:</label>
                    <input type="time" class="form-control mb-2" value="10:00">

                    <label>Aula:</label>
                    <input type="text" class="form-control mb-2" value="Aula 12">

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


<!-- MODAL: ELIMINAR HORARIO -->
<div class="modal fade" id="modalEliminarHorario" tabindex="-1">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">

            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title">Eliminar Horario</h5>
                <button class="btn-close text-white" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body text-center">
                <p>¿Desea eliminar este horario?</p>
            </div>

            <div class="modal-footer">
                <button class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Cancelar</button>
                <button class="btn btn-danger btn-sm">Eliminar</button>
            </div>

        </div>
    </div>
</div>


<?php require_once "layout/footer.php"; ?>

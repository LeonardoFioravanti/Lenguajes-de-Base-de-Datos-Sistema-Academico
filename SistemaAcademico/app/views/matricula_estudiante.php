<?php require_once "layout/header.php"; ?>
<?php require_once "layout/sidebar.php"; ?>

<div class="contenido">

    <h3>Matrícula de Cursos</h3>
    <p class="text-muted">Seleccione un curso y el grupo en el que desea matricularse.</p>

    <!-- LISTA DE CURSOS DISPONIBLES -->
    <div class="card shadow-sm mb-4">
        <div class="card-header bg-primary text-white">
            Cursos Disponibles
        </div>

        <div class="card-body">

            <table class="table table-hover align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>Curso</th>
                        <th>Código</th>
                        <th>Créditos</th>
                        <th>Acciones</th>
                    </tr>
                </thead>

                <tbody>

                    <!-- EJEMPLO 1 -->
                    <tr>
                        <td>Programación I</td>
                        <td>SIS-101</td>
                        <td>4</td>
                        <td>
                            <button class="btn btn-primary btn-sm" data-bs-toggle="collapse" data-bs-target="#grupos1">
                                Ver Grupos
                            </button>
                        </td>
                    </tr>

                    <!-- GRUPOS DEL CURSO 1 -->
                    <tr class="collapse bg-light" id="grupos1">
                        <td colspan="4">
                            <table class="table table-sm table-bordered mb-0">
                                <thead class="table-secondary">
                                    <tr>
                                        <th>Grupo</th>
                                        <th>Profesor</th>
                                        <th>Horario</th>
                                        <th>Cupo</th>
                                        <th>Acción</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>01</td>
                                        <td>Juan Pérez</td>
                                        <td>Lunes 8:00 - 10:00</td>
                                        <td>Disponible</td>
                                        <td>
                                            <button class="btn btn-success btn-sm">Matricular</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>02</td>
                                        <td>María López</td>
                                        <td>Miércoles 10:00 - 12:00</td>
                                        <td>Pocos espacios</td>
                                        <td>
                                            <button class="btn btn-success btn-sm">Matricular</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>


                    <!-- EJEMPLO 2 -->
                    <tr>
                        <td>Bases de Datos</td>
                        <td>SIS-201</td>
                        <td>3</td>
                        <td>
                            <button class="btn btn-primary btn-sm" data-bs-toggle="collapse" data-bs-target="#grupos2">
                                Ver Grupos
                            </button>
                        </td>
                    </tr>

                    <!-- GRUPOS DEL CURSO 2 -->
                    <tr class="collapse bg-light" id="grupos2">
                        <td colspan="4">
                            <table class="table table-sm table-bordered mb-0">
                                <thead class="table-secondary">
                                    <tr>
                                        <th>Grupo</th>
                                        <th>Profesor</th>
                                        <th>Horario</th>
                                        <th>Cupo</th>
                                        <th>Acción</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>A</td>
                                        <td>Carlos Díaz</td>
                                        <td>Viernes 1:00 - 3:00 pm</td>
                                        <td>Disponible</td>
                                        <td>
                                            <button class="btn btn-success btn-sm">Matricular</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>

                </tbody>

            </table>

        </div>
    </div>


    <!-- RESUMEN -->
    <div class="card shadow-sm">
        <div class="card-header bg-dark text-white">
            Resumen de Matrícula
        </div>

        <div class="card-body">
            <table class="table table-hover align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>Curso</th>
                        <th>Grupo</th>
                        <th>Horario</th>
                        <th>Acción</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>Programación I</td>
                        <td>Grupo 01</td>
                        <td>Lunes 8:00 - 10:00</td>
                        <td>
                            <button class="btn btn-danger btn-sm">Retirar</button>
                        </td>
                    </tr>
                </tbody>

            </table>
        </div>
    </div>

</div>

<?php require_once "layout/footer.php"; ?>

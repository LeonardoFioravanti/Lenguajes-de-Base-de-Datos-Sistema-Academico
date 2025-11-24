<?php require_once "layout/header.php"; ?>
<?php require_once "layout/sidebar.php"; ?>

<div class="contenido">

    <h3 class="mb-4">Bienvenido(a)</h3>
    <p class="text-muted">Este es tu panel de estudiante. Aquí puedes ver la información más importante del día.</p>

    <!-- TARJETAS PRINCIPALES -->
    <div class="row g-3">

        <div class="col-md-4">
            <div class="card bg-primary text-white shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Cursos Matriculados</h5>
                    <h2>3</h2>
                    <p>Cursos activos este periodo</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card bg-success text-white shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Tareas Pendientes</h5>
                    <h2>2</h2>
                    <p>Por entregar esta semana</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card bg-warning text-white shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Próximos Eventos</h5>
                    <h2>1</h2>
                    <p>Actividad académica cercana</p>
                </div>
            </div>
        </div>

    </div>

    <!-- HORARIO -->
    <div class="row g-3 mt-4">
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-header bg-dark text-white">
                    Horario de Hoy
                </div>
                <div class="card-body">
                    <ul class="list-group">

                        <li class="list-group-item">
                            <strong>Programación I</strong> — 8:00am - 10:00am
                        </li>

                        <li class="list-group-item">
                            <strong>Bases de Datos</strong> — 10:00am - 12:00pm
                        </li>

                        <li class="list-group-item">
                            <strong>Matemática I</strong> — 1:00pm - 3:00pm
                        </li>

                    </ul>
                </div>
            </div>
        </div>

        <!-- EVENTOS -->
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    Próximos Eventos
                </div>
                <div class="card-body">
                    <ul class="list-group">

                        <li class="list-group-item">
                            <strong>Feria Vocacional</strong> — 25 Nov
                        </li>

                        <li class="list-group-item">
                            <strong>Charla de Ingeniería</strong> — 30 Nov
                        </li>

                        <li class="list-group-item">
                            <strong>Feria Académica</strong> — 5 Dic
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- ACCESOS RAPIDOS -->
    <div class="mt-4">
        <h4>Accesos rápidos</h4>
        <div class="row g-3 mt-2">

            <div class="col-md-3">
                <a href="/SistemaAcademico/app/views/matricula_estudiante.php" class="text-decoration-none">
                    <div class="card shadow-sm text-center p-3">
                        <h5>Matrícula</h5>
                        <p class="text-muted">Gestiona tus cursos</p>
                    </div>
                </a>
            </div>

            <div class="col-md-3">
                <a href="/SistemaAcademico/app/views/biblioteca_estudiante.php" class="text-decoration-none">
                    <div class="card shadow-sm text-center p-3">
                        <h5>Biblioteca</h5>
                        <p class="text-muted">Busca libros</p>
                    </div>
                </a>
            </div>

            <div class="col-md-3">
                <a href="#" class="text-decoration-none">
                    <div class="card shadow-sm text-center p-3">
                        <h5>Notas</h5>
                        <p class="text-muted">Consulta tus calificaciones</p>
                    </div>
                </a>
            </div>

            <div class="col-md-3">
                <a href="#" class="text-decoration-none">
                    <div class="card shadow-sm text-center p-3">
                        <h5>Pagos</h5>
                        <p class="text-muted">Revisa tus estados</p>
                    </div>
                </a>
            </div>

        </div>
    </div>

</div>

<?php require_once "layout/footer.php"; ?>

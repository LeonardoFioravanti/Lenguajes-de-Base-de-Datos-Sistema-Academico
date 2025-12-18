<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once "layout/header.php";
require_once "layout/sidebar.php";

require_once __DIR__ . "/../config/db.php";

/*  SOLICITAR PRÉSTAMO */
$mensaje = "";

if (isset($_POST['solicitar'])) {
    $id = (int)($_POST['id_libro'] ?? 0);

    if ($id > 0) {
        $sqlSolicitar = "UPDATE libros
                          SET estado = 'Prestado'
                          WHERE id_libro = :id
                            AND estado = 'Disponible'";
        $stmtSol = oci_parse($conn, $sqlSolicitar);
        oci_bind_by_name($stmtSol, ":id", $id);

        $ok = oci_execute($stmtSol, OCI_COMMIT_ON_SUCCESS);

        if ($ok) {
            $filas = oci_num_rows($stmtSol);
            if ($filas > 0) {
                $mensaje = "<div class='alert alert-success mb-3'> Solicitud enviada. (El libro quedó como <b>Prestado</b>.)</div>";
            } else {
                $mensaje = "<div class='alert alert-warning mb-3'> Ese libro ya no está disponible.</div>";
            }
        } else {
            $e = oci_error($stmtSol);
            $mensaje = "<div class='alert alert-danger mb-3'> Error: " . htmlspecialchars($e['message']) . "</div>";
        }
    }
}

/*  LISTAR LIBROS  */
$sql = "SELECT id_libro, titulo, autor, categoria, anio, estado
        FROM libros
        ORDER BY id_libro DESC";
$stmt = oci_parse($conn, $sql);
oci_execute($stmt);
?>

<div class="contenido">

  <div class="d-flex justify-content-between align-items-center mb-3">
    <h3>Catálogo de Biblioteca</h3>
  </div>

  <?= $mensaje ?>

  <!-- BUSCADOR -->
  <div class="card shadow-sm mb-3">
    <div class="card-body">
      <input id="buscadorLibros" type="text" class="form-control" placeholder="Buscar por título, autor o categoría...">
    </div>
  </div>

  <!-- TABLA DE LIBROS PARA ESTUDIANTES -->
  <div class="card shadow-sm">
    <div class="card-body">

      <table class="table table-hover align-middle" id="tablaLibros">
        <thead class="table-dark">
          <tr>
            <th>Título</th>
            <th>Autor</th>
            <th>Categoría</th>
            <th>Año</th>
            <th>Estado</th>
            <th style="width: 170px;">Acción</th>
          </tr>
        </thead>

        <tbody>
          <?php while (($row = oci_fetch_assoc($stmt)) !== false) { 
              $disponible = ($row['ESTADO'] === 'Disponible');
          ?>
            <tr>
              <td><?= htmlspecialchars($row['TITULO']) ?></td>
              <td><?= htmlspecialchars($row['AUTOR']) ?></td>
              <td><?= htmlspecialchars($row['CATEGORIA']) ?></td>
              <td><?= (int)$row['ANIO'] ?></td>
              <td>
                <span <?= $disponible ? 'success' : 'secondary' ?>">
                  <?= htmlspecialchars($row['ESTADO']) ?>
                </span>
              </td>
              <td>
                <?php if ($disponible) { ?>
                  <button type="button"
                          class="btn btn-primary btn-sm btn-solicitar"
                          data-toggle="modal"
                          data-target="#modalSolicitarLibro"
                          data-id="<?= $row['ID_LIBRO'] ?>"
                          data-titulo="<?= htmlspecialchars($row['TITULO'], ENT_QUOTES) ?>">
                    Solicitar
                  </button>
                <?php } else { ?>
                  <button class="btn btn-secondary btn-sm" disabled>No disponible</button>
                <?php } ?>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>

    </div>
  </div>
</div>

<!--  MODAL SOLICITAR  -->
<div class="modal fade" id="modalSolicitarLibro" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">

      <form method="POST">
        <input type="hidden" name="id_libro" id="sol_id_libro">

        <div class="modal-header">
          <h5 class="modal-title">Solicitar préstamo</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body">
          <p class="mb-1">Vas a solicitar:</p>
          <strong id="sol_titulo"></strong>
          <div class="text-muted" style="font-size: 12px;">Si está disponible, se marcará como <b>Prestado</b>.</div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancelar</button>
          <button type="submit" name="solicitar" class="btn btn-primary btn-sm">Sí, solicitar</button>
        </div>
      </form>

    </div>
  </div>
</div>

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
  // solicitar libro : cargar datos
  $(document).on('click', '.btn-solicitar', function () {
    $('#sol_id_libro').val($(this).data('id'));
    $('#sol_titulo').text($(this).data('titulo'));
  });

  // Buscador (filtra por texto en la tabla)
  document.getElementById('buscadorLibros').addEventListener('keyup', function () {
    const q = this.value.toLowerCase();
    const rows = document.querySelectorAll('#tablaLibros tbody tr');
    rows.forEach(r => {
      const txt = r.innerText.toLowerCase();
      r.style.display = txt.includes(q) ? '' : 'none';
    });
  });
</script>

<?php require_once "layout/footer.php"; ?>

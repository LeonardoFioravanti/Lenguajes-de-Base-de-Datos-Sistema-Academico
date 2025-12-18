<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once "layout/header.php";
require_once "layout/sidebar.php";

#requiere el archivo de conexión a la base de datos aparte el crud q cree q esta en config
#en config tmb esta las tablas de oracle que use por si no funciona para que se agreguen a la db
require_once __DIR__ . "/../config/db.php";
require_once __DIR__ . "/../config/CRUD_libros.php"; 
?>


<div class="contenido">

  <div class="d-flex justify-content-between align-items-center mb-3">
    <h3>Biblioteca - Administración</h3>

    <!-- Bootstrap 4: data-toggle / data-target -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarLibro">
      + Agregar libro
    </button>
  </div>

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
            <th style="width: 200px;">Acciones</th>
          </tr>
        </thead>

        <tbody>
          <?php while (($row = oci_fetch_assoc($stmt)) !== false) { ?>
            <tr>
              <td><?= $row['ID_LIBRO'] ?></td>
              <td><?= htmlspecialchars($row['TITULO']) ?></td>
              <td><?= htmlspecialchars($row['AUTOR']) ?></td>
              <td><?= htmlspecialchars($row['CATEGORIA']) ?></td>
              <td><?= $row['ANIO'] ?></td>
              <td>
                <span <?= ($row['ESTADO'] === 'Disponible') ? 'success' : 'secondary' ?>">
                  <?= htmlspecialchars($row['ESTADO']) ?>
                </span>
              </td>
              <td>
                  <!-- EDITAR (Bootstrap 4) -->
                  <button type="button" class="btn btn-primary btn-sm btn-editar btn-sm btn-editar mr-2"
                          data-toggle="modal" data-target="#modalEditarLibro"
                          data-id="<?= $row['ID_LIBRO'] ?>"
                          data-titulo="<?= htmlspecialchars($row['TITULO'], ENT_QUOTES) ?>"
                          data-autor="<?= htmlspecialchars($row['AUTOR'], ENT_QUOTES) ?>"
                          data-categoria="<?= htmlspecialchars($row['CATEGORIA'], ENT_QUOTES) ?>"
                          data-anio="<?= $row['ANIO'] ?>"
                          data-estado="<?= htmlspecialchars($row['ESTADO'], ENT_QUOTES) ?>">
                    Editar
                  </button>

                  <!-- ELIMINAR (Bootstrap 4) -->
                  <button type="button" class="btn btn-danger btn-sm btn-eliminar"
                          data-toggle="modal" data-target="#modalEliminarLibro"
                          data-id="<?= $row['ID_LIBRO'] ?>"
                          data-titulo="<?= htmlspecialchars($row['TITULO'], ENT_QUOTES) ?>">
                    Eliminar
                  </button>
                </div>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>

    </div>
  </div>
</div>

<!-- MODAL AGREGAR -->
<div class="modal fade" id="modalAgregarLibro" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">

      <form method="POST">
        <div class="modal-header">
          <h5 class="modal-title">Agregar libro</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label>Título</label>
              <input type="text" name="titulo" class="form-control" required>
            </div>
            <div class="form-group col-md-6">
              <label>Autor</label>
              <input type="text" name="autor" class="form-control" required>
            </div>
            <div class="form-group col-md-4">
              <label>Categoría</label>
              <input type="text" name="categoria" class="form-control" required>
            </div>
            <div class="form-group col-md-4">
              <label>Año</label>
              <input type="number" name="anio" class="form-control" required>
            </div>
            <div class="form-group col-md-4">
              <label>Estado</label>
              <select name="estado" class="form-control">
                <option value="Disponible">Disponible</option>
                <option value="Prestado">Prestado</option>
              </select>
            </div>
          </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="submit" name="agregar" class="btn btn-primary">Guardar</button>
        </div>
      </form>

    </div>
  </div>
</div>

<!--  MODAL EDITAR  -->
<div class="modal fade" id="modalEditarLibro" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">

      <form method="POST">
        <input type="hidden" name="id_libro" id="edit_id_libro">

        <div class="modal-header">
          <h5 class="modal-title">Editar libro</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label>Título</label>
              <input type="text" name="titulo" id="edit_titulo" class="form-control" required>
            </div>
            <div class="form-group col-md-6">
              <label>Autor</label>
              <input type="text" name="autor" id="edit_autor" class="form-control" required>
            </div>
            <div class="form-group col-md-4">
              <label>Categoría</label>
              <input type="text" name="categoria" id="edit_categoria" class="form-control" required>
            </div>
            <div class="form-group col-md-4">
              <label>Año</label>
              <input type="number" name="anio" id="edit_anio" class="form-control" required>
            </div>
            <div class="form-group col-md-4">
              <label>Estado</label>
              <select name="estado" id="edit_estado" class="form-control">
                <option value="Disponible">Disponible</option>
                <option value="Prestado">Prestado</option>
              </select>
            </div>
          </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="submit" name="actualizar" class="btn btn-warning">Actualizar</button>
        </div>
      </form>

    </div>
  </div>
</div>

<!--  MODAL ELIMINAR  -->
<div class="modal fade" id="modalEliminarLibro" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">

      <form method="POST">
        <input type="hidden" name="id_libro" id="del_id_libro">

        <div class="modal-header bg-danger text-white">
          <h5 class="modal-title">Eliminar libro</h5>
          <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body text-center">
          <p class="mb-1">¿Seguro que querés eliminar este libro?</p>
          <strong id="del_titulo"></strong>
          <div class="text-muted" style="font-size: 12px;">Esta acción no se puede deshacer.</div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancelar</button>
          <button type="submit" name="eliminar" class="btn btn-danger btn-sm">Sí, eliminar</button>
        </div>
      </form>

    </div>
  </div>
</div>

<!-- Scripts (Bootstrap 4) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
  // Editar: cargar datos
  $(document).on('click', '.btn-editar', function () {
    $('#edit_id_libro').val($(this).data('id'));
    $('#edit_titulo').val($(this).data('titulo'));
    $('#edit_autor').val($(this).data('autor'));
    $('#edit_categoria').val($(this).data('categoria'));
    $('#edit_anio').val($(this).data('anio'));
    $('#edit_estado').val($(this).data('estado'));
  });

  // Eliminar: cargar datos
  $(document).on('click', '.btn-eliminar', function () {
    $('#del_id_libro').val($(this).data('id'));
    $('#del_titulo').text($(this).data('titulo'));
  });
</script>

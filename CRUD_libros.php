<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once __DIR__ . "/../config/db.php"; 

if (!$conn) {
$e = oci_error();
die("No conectó a Oracle: " . $e['message']);
}

$sql = "SELECT id_libro, titulo, autor, categoria, anio, estado
        FROM libros
        ORDER BY id_libro DESC";

$stmt = oci_parse($conn, $sql);
if (!$stmt) {
$e = oci_error($conn);
die("Falló oci_parse: " . $e['message']);
}

$ok = oci_execute($stmt);
if (!$ok) {
$e = oci_error($stmt);
die("Falló oci_execute: " . $e['message']);
}
?>


<?php

//






// --- AGREGAR LIBRO ---
$mensaje = "";

if (isset($_POST['agregar'])) {

    $titulo    = trim($_POST['titulo']);
    $autor     = trim($_POST['autor']);
    $categoria = trim($_POST['categoria']);
    $anio      = (int)$_POST['anio'];
    $estado    = $_POST['estado'];

    if ($titulo && $autor && $categoria && $anio > 0) {

        $sql = "BEGIN sp_agregar_libro(
                    :titulo,
                    :autor,
                    :categoria,
                    :anio,
                    :estado
                ); END;";

        $stmt = oci_parse($conn, $sql);

        oci_bind_by_name($stmt, ":titulo", $titulo);
        oci_bind_by_name($stmt, ":autor", $autor);
        oci_bind_by_name($stmt, ":categoria", $categoria);
        oci_bind_by_name($stmt, ":anio", $anio);
        oci_bind_by_name($stmt, ":estado", $estado);

        oci_execute($stmt, OCI_COMMIT_ON_SUCCESS);
        header("Location: biblioteca_admin.php");
        exit;
    }
}

?>


<?php
// --- EDITAR LIBRO ---
if (isset($_POST['actualizar'])) {

    $id        = (int)$_POST['id_libro'];
    $titulo    = trim($_POST['titulo']);
    $autor     = trim($_POST['autor']);
    $categoria = trim($_POST['categoria']);
    $anio      = (int)$_POST['anio'];
    $estado    = $_POST['estado'];

    if ($id > 0 && $titulo && $autor && $categoria && $anio > 0) {

        $sql = "BEGIN sp_actualizar_libro(
                    :id,
                    :titulo,
                    :autor,
                    :categoria,
                    :anio,
                    :estado
                ); END;";

        $stmt = oci_parse($conn, $sql);

        oci_bind_by_name($stmt, ":id", $id);
        oci_bind_by_name($stmt, ":titulo", $titulo);
        oci_bind_by_name($stmt, ":autor", $autor);
        oci_bind_by_name($stmt, ":categoria", $categoria);
        oci_bind_by_name($stmt, ":anio", $anio);
        oci_bind_by_name($stmt, ":estado", $estado);

        oci_execute($stmt, OCI_COMMIT_ON_SUCCESS);
        header("Location: biblioteca_admin.php");
        exit;
    }
}



/* ================== ELIMINAR LIBRO ================== */
if (isset($_POST['eliminar'])) {

    $id = (int)$_POST['id_libro'];

    if ($id > 0) {

        $sql = "BEGIN sp_eliminar_libro(:id); END;";
        $stmt = oci_parse($conn, $sql);

        oci_bind_by_name($stmt, ":id", $id);

        oci_execute($stmt, OCI_COMMIT_ON_SUCCESS);
        header("Location: biblioteca_admin.php");
        exit;
    }
}

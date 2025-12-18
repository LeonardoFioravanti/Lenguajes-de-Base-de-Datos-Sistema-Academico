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

// --- AGREGAR LIBRO ---
$mensaje = "";

if (isset($_POST['agregar'])) {

    $titulo    = trim($_POST['titulo'] ?? "");
    $autor     = trim($_POST['autor'] ?? "");
    $categoria = trim($_POST['categoria'] ?? "");
    $anio      = (int)($_POST['anio'] ?? 0);
    $estado    = trim($_POST['estado'] ?? "Disponible");

    if ($titulo === "" || $autor === "" || $categoria === "" || $anio <= 0) {
        $mensaje = "⚠️ Llená todos los campos.";
    } else {

        $sqlInsert = "INSERT INTO libros (titulo, autor, categoria, anio, estado)
                    VALUES (:titulo, :autor, :categoria, :anio, :estado)";

        $stmtInsert = oci_parse($conn, $sqlInsert);

        oci_bind_by_name($stmtInsert, ":titulo", $titulo);
        oci_bind_by_name($stmtInsert, ":autor", $autor);
        oci_bind_by_name($stmtInsert, ":categoria", $categoria);
        oci_bind_by_name($stmtInsert, ":anio", $anio);
        oci_bind_by_name($stmtInsert, ":estado", $estado);

        $ok = oci_execute($stmtInsert, OCI_COMMIT_ON_SUCCESS);

        if ($ok) {
            header("Location: biblioteca_admin.php"); // refresca lista
            exit;
        } else {
            $e = oci_error($stmtInsert);
            $mensaje = " Error al agregar: " . $e['message'];
        }
    }
}
?>


<?php
// --- EDITAR LIBRO ---
if (isset($_POST['actualizar'])) {

    $id        = (int)($_POST['id_libro'] ?? 0);
    $titulo    = trim($_POST['titulo'] ?? "");
    $autor     = trim($_POST['autor'] ?? "");
    $categoria = trim($_POST['categoria'] ?? "");
    $anio      = (int)($_POST['anio'] ?? 0);
    $estado    = trim($_POST['estado'] ?? "Disponible");

    if ($id > 0 && $titulo !== "" && $autor !== "" && $categoria !== "" && $anio > 0) {

        $sqlUpdate = "UPDATE libros
                SET titulo = :titulo,
                    autor = :autor,
                    categoria = :categoria,
                    anio = :anio,
                    estado = :estado
                WHERE id_libro = :id";

                    
        $stmtUpdate = oci_parse($conn, $sqlUpdate);

        oci_bind_by_name($stmtUpdate, ":titulo", $titulo);
        oci_bind_by_name($stmtUpdate, ":autor", $autor);
        oci_bind_by_name($stmtUpdate, ":categoria", $categoria);
        oci_bind_by_name($stmtUpdate, ":anio", $anio);
        oci_bind_by_name($stmtUpdate, ":estado", $estado);
        oci_bind_by_name($stmtUpdate, ":id", $id);

        oci_execute($stmtUpdate, OCI_COMMIT_ON_SUCCESS);
        header("Location: biblioteca_admin.php");
        exit;
    }
}


/* ================== ELIMINAR LIBRO ================== */
if (isset($_POST['eliminar'])) {
    $id = (int)($_POST['id_libro'] ?? 0);

    if ($id > 0) {
        $sqlDelete = "DELETE FROM libros WHERE id_libro = :id";
        $stmtDelete = oci_parse($conn, $sqlDelete);
        oci_bind_by_name($stmtDelete, ":id", $id);
        oci_execute($stmtDelete, OCI_COMMIT_ON_SUCCESS);

        header("Location: biblioteca_admin.php");
        exit;
    }
}
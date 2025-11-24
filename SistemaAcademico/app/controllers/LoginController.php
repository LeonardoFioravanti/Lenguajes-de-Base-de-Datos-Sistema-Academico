<?php
require_once "../../config/database.php";

if (!isset($_POST['correo']) || !isset($_POST['password'])) {
    die("Faltan datos del login");
}

$correo = trim($_POST['correo']);
$password = trim($_POST['password']);

$db = new Database();
$conn = $db->connect();


$sql = "BEGIN 
            sp_login_usuario(
                :p_correo,
                :p_id_usuario,
                :p_nombreUsuario,
                :p_contrasena,
                :p_id_rol
            ); 
        END;";

$stid = oci_parse($conn, $sql);

// IN
oci_bind_by_name($stid, ":p_correo", $correo);

// OUT
oci_bind_by_name($stid, ":p_id_usuario", $id_usuario, 10);
oci_bind_by_name($stid, ":p_nombreUsuario", $nombreUsuario, 50);
oci_bind_by_name($stid, ":p_contrasena", $contra_db, 255);
oci_bind_by_name($stid, ":p_id_rol", $rol, 10);

$exec = oci_execute($stid);

if (!$exec) {
    $e = oci_error($stid);
    if (strpos($e['message'], 'ORA-01403') !== false) {
        die("Correo no encontrado");
    }

    die("Error Oracle: " . $e['message']);
}

// Comprobar contrasena
if ($password !== $contra_db) {
    die("Contraseña incorrecta");
}

session_start();
$_SESSION['usuario'] = [
    "id_usuario" => $id_usuario,
    "nombreUsuario" => $nombreUsuario,
    "correo" => $correo,
    "rol" => $rol
];

// Redirección por rol
if ($rol == 1) {
    header("Location: ../views/panel_admin.php");
} elseif ($rol == 2) {
    header("Location: ../views/panel_profesor.php");
} else {
    header("Location: ../views/panel_estudiante.php");
}
exit();

?>

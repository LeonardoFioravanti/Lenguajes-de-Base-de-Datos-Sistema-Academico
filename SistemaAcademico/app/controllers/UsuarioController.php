<?php
require_once "../../config/database.php";

class UsuarioController {

    // =========================================
    // CREAR USUARIO
    // =========================================
    public function crear() {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            die("Método no permitido.");
        }

        $nombreUsuario = $_POST['nombreUsuario'];
        $correo        = $_POST['correo'];
        $password      = $_POST['password'];
        $rol           = $_POST['id_rol'];

        $db   = new Database();
        $conn = $db->connect();

        $sql = "BEGIN 
                    sp_crear_usuario(
                        :p_nombreUsuario,
                        :p_correo,
                        :p_contrasena,
                        :p_id_rol,
                        :p_resultado
                    ); 
                END;";

        $stid = oci_parse($conn, $sql);

        oci_bind_by_name($stid, ":p_nombreUsuario", $nombreUsuario);
        oci_bind_by_name($stid, ":p_correo",        $correo);
        oci_bind_by_name($stid, ":p_contrasena",    $password);
        oci_bind_by_name($stid, ":p_id_rol",        $rol);

        oci_bind_by_name($stid, ":p_resultado", $resultado, 200);
        oci_execute($stid);

        if ($resultado === "OK") {
            header("Location: ../views/usuarios.php?msg=Usuario creado correctamente");
        } else {
            header("Location: ../views/usuarios.php?error=" . urlencode($resultado));
        }

        exit();
    }

    // =========================================
    // ACTUALIZAR USUARIO (lo hacemos luego)
    // =========================================
    public function actualizar() {
        echo "actualizar usuario (en construcción)";
    }

    // =========================================
    // ELIMINAR USUARIO
    // =========================================
    public function eliminar() {
        echo "eliminar usuario (en construcción)";
    }

}
?>

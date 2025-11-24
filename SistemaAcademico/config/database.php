<?php
class Database {
    private $conn;

    public function connect() {

        $username = "SISTEMA_ACADEMICO";
        $password = "Sistema_Academico";

        $host = "localhost";
        $port = "1521";
        $service = "XE";

        $connection_string = "(DESCRIPTION=
            (ADDRESS=(PROTOCOL=TCP)(HOST=$host)(PORT=$port))
            (CONNECT_DATA=(SERVICE_NAME=$service))
        )";

        $this->conn = oci_connect($username, $password, $connection_string, "AL32UTF8");

        if (!$this->conn) {
            $e = oci_error();
            die("Error de conexión Oracle: " . $e['message']);
        }

        return $this->conn;
    }
}
?>

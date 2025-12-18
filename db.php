<?php
$tns = "(DESCRIPTION=
          (ADDRESS=(PROTOCOL=TCP)(HOST=localhost)(PORT=1521))
          (CONNECT_DATA=(SID=xe))
        )";

$conn = oci_connect("hr", "hr", $tns, "AL32UTF8");

if (!$conn) {
    $e = oci_error();
    die("Error Oracle: " . $e['message']);
}

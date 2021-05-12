<?php

//$conexion=mysqli_connect("127.0.0.1","root","verde");
function connect(){
    $server = "127.0.0.1";
    $user = "root";
    $pass = "verde";
    $db = "tienda";
    try {
        $enlace = new PDO("sqlsrv:server=$server;database=$db", $user, $pass);
        if ($enlace) {
            return $enlace;
        }
    } catch (Exception $ex) {
        echo "<h1>Ocurrió un error con la base de datos: " . $ex->getMessage().'</h1>';
    }
}
?>
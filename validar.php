<?php
//echo $_POST
require_once './db.php';
if (isset($_POST['nombre']) && isset($_POST['pass'])) {
    echo 'entrando';
    $nombre = $_POST['nombre'];
    $pass = $_POST['pass'];

    $conexion = connect()->query("SELECT * FROM usuarios WHERE nombre = $nombre AND pass = $pass");
    $conexion->execute();
    
    if ($conexion) {
        header('Location: admin.php');
    }    
}

?>

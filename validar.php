<?php
//echo $_POST
require_once './db.php';
if (isset($_POST['nombre']) && isset($_POST['pass'])) {
    echo 'entrando';
    $nombre = $_POST['nombre'];
    $pass = $_POST['pass'];
}
protected function iniciarSesionModelo($datos){
    $sql = conexion::connect()->prepare("SELECT * FROM Empleado WHERE Correo=:email AND Password=:pass");
    $sql->bindParam(":email", $datos['email']);
    $sql->bindParam(":pass", $datos['password']);
    echo 'vardump de la consulta en DB';
    var_dump($sql->execute());
    return $sql;
    }
?>
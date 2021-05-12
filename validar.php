<?php
//echo $_POST
require_once './db.php';
if (isset($_POST['nombre']) && isset($_POST['pass'])) {
    echo 'entrando';
    $nombre = $_POST['nombre'];
    $pass = $_POST['pass'];
}

    echo 'verde se la come';
?>

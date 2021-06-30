<?php
    $servidor = 'localhost';
    $usuario = 'root';
    $contrasena = 'root';
    $baseDeDatos = 'cni';
    $conexion = mysqli_connect($servidor,$usuario,$contrasena,$baseDeDatos);
    $conexion -> set_charset("utf8");
?>

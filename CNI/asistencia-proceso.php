<?php
    include 'bd.php';
    $option = $_POST["option"];
    $insertar = "INSERT INTO asistencias(comentario) VALUES ('$option')";
    $resultado=mysqli_query($conexion, $insertar);
    if(!$resultado){
        echo 'Se guardó correctamente';
    }else{
        echo 'No se guardó correctamente'
    }			
?>
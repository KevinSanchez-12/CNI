<?php
    include 'bd.php';
    $nombres = $_POST["nombres"];
    $dni = $_POST["dni"];
    $correo = $_POST["correo"];
    $celular = $_POST["celular"];
    $direccion = $_POST["direccion"];
    $asunto = $_POST["asunto"];
    $mensaje = $_POST["mensaje"];
    $ruta_temporal = $_FILES["archivo"]["tmp_name"];
    $directorio = "mesa/";
    $archivo = $directorio . basename($_FILES["archivo"]["name"]);
    $tipoArchivo = strtolower(pathinfo($archivo, PATHINFO_EXTENSION));
    if(move_uploaded_file($ruta_temporal, $archivo)){
    $rutadocumento = $archivo;
    $datos_documento = "INSERT INTO mesadepartes(nombres, dni, correo, celular, direccion, asunto, mensaje, archivo) 
    VALUES ('$nombres','$dni','$correo','$celular','$direccion','$asunto','$mensaje','$rutadocumento')";			
    $declarar_documento = mysqli_query($conexion, $datos_documento);                                
    if($declarar_documento) {
    echo "<script> 
    alert('Su trámite se envió correctamente.'); 
    window.location = 'mesadepartes.php'
    </script>";
    }
    }else{
    echo "<script> 
    alert('Hubo error al tramitar.'); 
    window.location = 'mesadepartes.php'
    </script>";
    }  
?>
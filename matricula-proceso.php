<?php
    include 'bd.php';
    $dni = $_POST["dni"];
    $nombres = $_POST["nombres"];
    $apellidos = $_POST["apellidos"];
    $edad = $_POST["edad"];
    $nacimiento = $_POST["nacimiento"];
    $nacionalidad = $_POST["nacionalidad"];
    $direccion = $_POST["direccion"];
    $correo = $_POST["correo"];
    $grado = $_POST["grado"];
    $seccion = $_POST["seccion"];
    $turno = $_POST["turno"];
    $ruta_temporal = $_FILES["copiaDNI"]["tmp_name"];
    $directorio = "copiaDNI/";
    $archivo = $directorio . basename($_FILES["copiaDNI"]["name"]);
    $tipoArchivo = strtolower(pathinfo($archivo, PATHINFO_EXTENSION));
   if(move_uploaded_file($ruta_temporal, $archivo)){
    $rutadocumento = $archivo;
    $datos_documento = "INSERT INTO matriculas(dni, nombres, apellidos, edad, nacimiento, nacionalidad, direccion, correo, grado, seccion, turno, copiaDNI) 
    VALUES ('$dni','$nombres','$apellidos','$edad','$nacimiento','$nacionalidad','$direccion','$correo','$grado','$seccion','$turno','$rutadocumento')";			
    $declarar_documento = mysqli_query($conexion, $datos_documento);                                
    if($declarar_documento) {
    echo "<script> 
    alert('Su matrícula se reservó correctamente.'); 
    window.location = 'matricula.php'
    </script>";
    }
    }else{
    echo "<script> 
    alert('Hubo error al reservar matrícula.'); 
    window.location = 'matricula.php'
    </script>";
    }  
?>
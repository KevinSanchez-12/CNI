<?php 
    include 'bd.php';
    $alumnos = "SELECT * FROM matriculas";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CNI | Asistencia</title>
    <link rel="icon" href="assets/img/0001.png">
    <link rel="stylesheet" href="assets/css/general.css">
    <link rel="stylesheet" href="assets/css/asistencia.css?1.6">
    <link rel="stylesheet" href="assets/css/icons.css">
    <link href="assets/css/alertify.min.css" rel="stylesheet"/>
    <script src="assets/js/alertify.min.js"></script>
</head>
<body>
    <nav class="aviso">
        <div class="contenedor">
            <div>
                <span class="icon-home">|&nbsp;</span>
                <a href="aulavirtual.html">Aula Virtual</a>
                <span class="icon-phone">|&nbsp;</span>
                <a href="tel:284-8095">284-8095</a>
                <span class="icon-mail-alt">|&nbsp;</span>
                <a href="mailto:cnimesadeparte@gmail">cnimesadeparte@gmail.com</a>
            </div>
        </div>
    </nav>
    <nav class="menu">
        <ul class="contenedor">
            <li class="seccion-a">
                <a href="index.html">
                    <img src="assets/img/0001.png" alt="Insignia del Colegio Nacional de Imperial">
                    <div>
                        <h1>CNI</h1>
                        <h5>Colegio Nacional de Imperial</h5>
                    </div>
                </a>
            </li>
            <li class="seccion-b">
                <a href="index.html">Inicio</a>
                <a href="aulavirtual.php">Aula Virtual</a>
                <a href="mesadepartes.php">Mesa de Partes</a>
                <a href="matricula.php">Matrícula 2022</a>
                <a href="sivireno.php">SIVIRENO</a>
                <a href="biblioteca.html">Biblioteca Virtual</a>
            </li>
        </ul>
    </nav>
    <section class="social">
        <a target="_blank" href="https://www.facebook.com/profile.php?id=100014020116203" class="icon-facebook"></a>
        <a target="_blank" href="https://api.whatsapp.com/send?phone=+51998833958&text=Te%20saluda%20la%20Directora%20del%20Colegio%20Nacional%20de%20Imperial%C2%BFEn%20que%20te%20puedo%20ayudar?" class="icon-wspt"></a>
        <a href="mailto:cnimesadeparte@gmail" class="icon-mail-alt"></a>
    </section>
    <h1 class="title">Asistencia</h1>
    <section class="datos">
        <h3>Registre la asistencia de los alumnos de la clase de hoy.</h3>
        <form action="asistencia-proceso.php" method="POST" autocomplete="off" enctype="multipart/form-data">
            <?php $resultado= mysqli_query($conexion, $alumnos);
            while($row=mysqli_fetch_assoc($resultado)){ ?>
            <section class="registro">
                <div class="item">
                    <div class="seccion-a">
                        <h1><?php echo $row["nombres"];?></h1>
                        <h1><?php echo $row["apellidos"];?></h1>
                    </div>
                    <div class="seccion-b">
                        <select name="option">
                            <option value="">Escoga</option>
                            <option value="Asistió">Asistió</option>
                            <option value="Faltó">Faltó</option>
                            <option value="Justificado">Justificado</option>
                        </select>
                    </div>
                </div>
            </section>
            <?php }?>
            <div class="btn">
                <input type="submit" value="Registar Asistencia">
            </div>
        </form>
    </section>
</body>
<script type="text/javascript">
    function validarExt(){
        var archivoInput = document.getElementById('dni');
        var archivoRuta = archivoInput.value;
        var extPermitidas = /(.)$/i;
        if(!extPermitidas.exec(archivoRuta)){
            alertify.error('Hubo un error al subir la copia del DNI.');
            archivoInput.value = '';
            return false;
        }
        else
        {
            if (archivoInput.files && archivoInput.files[0]) 
            {
                var visor = new FileReader();
                alertify.success('Su copia de DNI se subió correctamente.');
                visor.onload = function(e) 
                { 
                };
                visor.readAsDataURL(archivoInput.files[0]);
            }
        }
    }
</script>
</html>
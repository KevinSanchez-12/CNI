<?php 
    include 'bd.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CNI | Mesa de Partes</title>
    <link rel="icon" href="assets/img/0001.png">
    <link rel="stylesheet" href="assets/css/general.css">
    <link rel="stylesheet" href="assets/css/mesadepartes.css">
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
    <h1 class="title">Mesa de Partes Virtual</h1>
    <section class="datos">
        <h3>Ingrese sus datos personales para solicitar un trámite, quejas o sugerencias.</h3>
        <form action="mesadepartes-proceso.php" method="POST" autocomplete="off" enctype="multipart/form-data">
            <div class="item">
                <div>
                    <h4>Nombres y Apellidos:</h4>
                    <input name="nombres" type="text" class="large" required>
                </div>
                <div>
                    <h4>DNI:</h4>
                    <input name="dni" type="text" class="small" required>
                </div>
            </div>
            <div class="item">
                <div>
                    <h4>Correo:</h4>
                    <input name="correo" type="email" class="large" required>
                </div>
                <div>
                    <h4>Celular:</h4>
                    <input name="celular" type="tel" class="small" required>
                </div>
            </div>
            <div class="item">
                <div>
                    <h4>Dirección:</h4>
                    <input name="direccion" type="text" class="large" required>
                </div>
            </div>  
            <div class="item">
                <div>
                    <h4>Asunto:</h4>
                    <input name="asunto" type="text" class="xlarge" required>
                </div>
            </div>
            <div class="item mensaje">
                <div>
                    <h4>Mensaje:</h4>
                    <textarea name="mensaje" id="" cols="30" rows="10" required></textarea>
                </div>
            </div>    
            <div class="item file">
                <div>
                    <h4>Adjuntar Archivo Digital:</h4>
                    <input name="archivo" id="file" type="file" onchange="return validarExt()" required>
                    <button onclick="document.getElementById('file').click()">Subir Archivo</button>
                </div>
            </div>
            <div class="btn">
                <input type="submit">
            </div>
        </form>
    </section>
</body>
<script type="text/javascript">
    function validarExt(){
        var archivoInput = document.getElementById('file');
        var archivoRuta = archivoInput.value;
        var extPermitidas = /(.pdf)$/i;
        if(!extPermitidas.exec(archivoRuta)){
            alertify.error('Asegúrese de que su documento tenga formato PDF.');
            archivoInput.value = '';
            return false;
        }
        else
        {
            if (archivoInput.files && archivoInput.files[0]) 
            {
                var visor = new FileReader();
                alertify.success('Su documento se subió correctamente.');
                visor.onload = function(e) 
                { 
                };
                visor.readAsDataURL(archivoInput.files[0]);
            }
        }
    }
</script>
</html>
<?php 
    include 'bd.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CNI | Matrícula</title>
    <link rel="icon" href="assets/img/0001.png">
    <link rel="stylesheet" href="assets/css/general.css">
    <link rel="stylesheet" href="assets/css/matricula.css">
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
    <h1 class="title">Matrícula 2022</h1>
    <section class="datos">
        <h3>Ingrese los datos personales de su hijo(a) para reservar la vacante de ingreso 2022.</h3>
        <form action="matricula-proceso.php" method="POST" autocomplete="off" enctype="multipart/form-data">
            <div>
                <span class="icon-id-card"></span>
                <input name="dni" type="text" placeholder="DNI" required>
            </div>
            <div>
                <span class="icon-user"></span>
                <input name="nombres" type="text" placeholder="Nombres" required>
            </div>
            <div>
                <span class="icon-user"></span>
                <input name="apellidos" type="text" placeholder="Apellidos" required>
            </div>
            <div>
                <span class="icon-heart-1"></span>
                <input name="edad" type="number" placeholder="Edad" required>
            </div>
            <div>
                <span class="icon-calendar"></span>
                <input name="nacimiento" type="date" placeholder="Fecha de Nacimiento" required>
            </div>
            <div>
                <span class="icon-flag"></span>
                <select name="nacionalidad" id="" required>
                    <option value="">Nacionalidad</option>
                    <option value="Peruana">Peruana</option>
                    <option value="Argentina">Argentina</option>
                    <option value="Boliviana">Boliviana</option>
                    <option value="Venezolana">Venezolana</option>
                    <option value="Brasilera">Brasilera</option>
                </select>
            </div>
            <div>
                <span class="icon-location"></span>
                <input name="direccion" type="text" placeholder="Dirección de Residencia" required>
            </div>
            <div>
                <span class="icon-mail-alt"></span>
                <input name="correo" type="email" placeholder="Correo Electrónico" required>
            </div>
            <div>
                <span class="icon-graduation-cap"></span>
                <select name="grado" id="" required>
                    <option value="">Grado</option>
                    <option value="1° Primaria">1° Primaria</option>
                    <option value="2° Primaria">2° Primaria</option>
                    <option value="3° Primaria">3° Primaria</option>
                    <option value="4° Primaria">4° Primaria</option>
                    <option value="5° Primaria">5° Primaria</option>
                    <option value="6° Primaria">6° Primaria</option>
                    <option value="1° Secundaria">1° Secundaria</option>
                    <option value="2° Secundaria">2° Secundaria</option>
                    <option value="3° Secundaria">3° Secundaria</option>
                    <option value="4° Secundaria">4° Secundaria</option>
                    <option value="5° Secundaria">5° Secundaria</option>
                </select>
            </div>
            <div>
                <span class="icon-graduation-cap"></span>
                <select name="seccion" id="" required>
                    <option value="">Sección</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                </select>
            </div>
            <div>
                <span class="icon-clock"></span>
                <select name="turno" id="" required>
                    <option value="">Turno</option>
                    <option value="Mañana">Mañana</option>
                    <option value="Tarde">Tarde</option>
                </select>
            </div>
            <div>
                <span class="icon-doc-text-inv"></span>
                <input name="copiaDNI" id="dni" type="file" onchange="return validarExt()" required>
                <button required onclick="document.getElementById('dni').click()">Copia de DNI</button>
            </div>
            <div>
                <input type="submit" value="Reservar Matricula">
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
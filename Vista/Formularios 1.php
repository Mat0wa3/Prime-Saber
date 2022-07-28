<?php
    session_start();
if(!isset($_SESSION["id"])){
    header("location: ../Vista/login.php");
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Formulario de registro_Mi Web</title>
    <link rel="icon" href="img/escudo.png">
    <link rel="stylesheet" href="css/icons.css">
    <link rel="stylesheet" type="text/css" href="css/formulario.css">
</head>

<body>

    <a href="admin.php" class="btn-back"><span class="icon-undo2"></span></a>


    <form action="../Controlador/control.php" method="POST" class="registro">
        <h2 style="text-align: center;">Formulario de registro</h2>
        <hr>
        <br>
        <select name="Cargo" class="centrar-form" required>
            <option class="listado" selected hidden value="">Tipo de usuario</option>
            <option class="listado" value="Profesor">Profesor</option>
            <option class="listado" value="Estudiante">Estudiante</option>
        </select>
        <br>
        <br>
        <input class="doble1" name="Nombre" required="Este campo es obligatorio" placeholder="Ingrese el nombre">
        <input class="doble2" type="text" name="Apellidos" required="Este campo es obligatorio" placeholder="Ingrese los apellidos">

        <input class="centrar-form" type="text" name="Telefono" required="Este campo es obligatorio" placeholder="Ingrese el teléfono">
        <br>
        <br>
        <select for="Sexo" class="centrar-form" name="Sexo" required>
            <option class="listado" selected hidden value="">Sexo</option>
            <option class="listado" value="Hombre">Hombre</option>
            <option class="listado" value="Mujer">Mujer</option>
        </select>
        <br>
        <br>

        <select class="centrar-form" name="TDD" required>
            <option class="listado" selected hidden value="">Tipo de documento</option>
            <option class="listado" value="Tid"> Tarjeta de Identidad</option>
            <option class="listado" value="Cc"> Cédula de Ciudadanía</option>
            <option class="listado" value="Te"> Tarjeta de Extranjería</option>
        </select>

        <br>
        <br>
        <input class="centrar-form" type="text" name="Identi" placeholder="Ingrese el numero de identificación" required>
        <br>
        <br>
        <input class="centrar-form" type="email" name="email" required="Este campo es obligatorio" placeholder="Ingrese su correo electrónico">
        <br>
        <br>
        <input class="centrar-form" type="password" name="clave1" required="Este campo es obligatorio" placeholder="Ingrese su contraseña">
        <br>
        <br>
        <input class="centrar-form" type="password" name="clave2" required="Este campo es obligatorio" placeholder="Confirme su contraseña">
        <br>
        <div class="terms">
            <input type="checkbox" id="checkbox" required="Debe aceptar los terminos y condiciones"><label for="checkbox" class="text">Estoy de acuerdo con <a href="#">Términos y condiciones</a></label>
        </div>
        <button class="botons" name="btn_registrar">Registrar</button>

    </form>

    <footer id="contacto">
        <div class="footer-content">
            <div class="contact-us">
                <h2 class="brand">Colegio Arborizadora baja</h2>
                <p>"Hacia una cultura para el desarrollo sostenible"</p>
                <p>Dirección: Avenida 59sur #44A-02/Arborizadora Baja/Ciudad Bolivar Teléfono 7185789</p>

            </div>
            <div class="social-media">
                <a href="/" class="social-media-icon">
                    <i class='bx bxl-facebook'></i>
                </a>
                <a href="/" class="social-media-icon">
                    <i class='bx bxl-twitter'></i>
                </a>
                <a href="/" class="social-media-icon">
                    <i class='bx bxl-instagram'></i>
                </a>
            </div>
        </div>
    </footer>
</body>

</html>
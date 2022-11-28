<?php
include('../Controlador/usuarioControlador.php');
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a22bc65f86.js" crossorigin="anonymous"></script>
    <title>Ingresar</title>
    <link rel="stylesheet" href="../assets/css/ingresar.css">
    <link rel="shortcut icon" href="../assets/img/escudo.png" type="image/x-icon">
</head>

<body>

    <div class="container">
        <a href="../index.php" class="btn__back">
            <i class="fa-solid fa-circle-left"></i>
            <h3>Volver</h3>
        </a>
        <div class="forms__container">
            <div class="signin-signup">
                <form action="" method="post" class="sign-in-form">
                    <h2 class="title">Ingresar</h2>
                    <div class="input__field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="txtusuario" placeholder="Usuario">
                    </div>
                    <div id="ifield__clave" class="input__field">
                        <i class="fas fa-lock"></i>
                        <input id="iclave" type="password" name="txtclave" placeholder="Contraseña">
                        <i id="ieye" class="fa-solid fa-eye" onclick="showHide()"></i>
                    </div>
                    <input type="submit" name="ingresar" value="Ingresar" class="btn solid">
                </form>

                <form action="" method="post" class="sign-up-form">
                    <h2 class="title">Registrarse</h2>
                    <div class="input__field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="txtnombre" placeholder="Nombres">
                    </div>
                    <div class="input__field">
                        <i class="fa-solid fa-signature"></i>
                        <input type="text" name="txtapellido" placeholder="Apellidos">
                    </div>
                    <div class="input__field">
                        <i class="fas fa-envelope"></i>
                        <input type="text" name="txtmail" placeholder="Email">
                    </div>
                    <div id="ifield__clave" class="input__field">
                        <i class="fas fa-lock"></i>
                        <input id="iclave2" type="password" name="txtclave" placeholder="Contraseña" title="Una contraseña válida es un conjuto de caracteres, donde cada uno consiste de una letra mayúscula o minúscula, o un dígito. La contraseña debe empezar con una letra y contener al menor un dígito">
                        <i id="ieye2" class="fa-solid fa-eye" onclick="showHide2()"></i>
                    </div>
                    <div class="input__field">
                        <i class="fas fa-lock"></i>
                        <input id="iclave2" type="password" name="txtclave2" placeholder="Confirmar contraseña">
                    </div>
                    <div class="input__field">
                        <i class="fas fa-user-tie"></i>
                        <select name="txtrol">
                            <option value="" disabled selected>Tipo de usuario</option>
                            <option value="ESTUDIANTE">Estudiante</option>
                            <option value="PROFESOR">Profesor</option>
                        </select>
                    </div>
                    <input type="submit" name="registrarse" value="Registrarse" class="btn solid">
                </form>
            </div>
        </div>

        <div class="panels__container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Eres Nuevo ?</h3>
                    <p>Si presionas este boton puedes crear una cuenta y unirte a nuestra plataforma!</p>
                    <button class="btn transparent" id="sign-up-btn">Registrarse</button>
                </div>

                <img src="../assets/img/log.svg" class="image" alt="login">
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>Ya eres miembro ?</h3>
                    <p>En el siguiente enlace podrás iniciar sesión en tu cuenta.</p>
                    <button class="btn transparent" id="sign-in-btn">Ingresar</button>
                </div>

                <img src="../assets/img/register.svg" class="image" alt="login">
            </div>
        </div>
    </div>
    <script src="../assets/js/ingresar.js"></script>
</body>

</html>
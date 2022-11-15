<?php
include('../../Modelo/db.php');
include('../../Modelo/parameters.php');
include('../../Controlador/usuarioControlador.php');
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo url_base() ?>assets/css/SignUp.css">
    <link rel="shortcut icon" href="<?php echo url_base() ?>assets/img/escudo.png" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo url_base() ?>assets/css/layout.css">
    <script src="https://kit.fontawesome.com/a22bc65f86.js" crossorigin="anonymous"></script>
    <title>Formulario Registro</title>
</head>

<body>

    <header>
        <div class="header">
            <figure>
                <img src="../../assets/img/escudo.png" alt="logo" height="80px">
            </figure>
            <h2>Institución Educativa Barrio Santander</h2>
            <div class="back">
                <a href="../../index.php">
                    <i class="fa-solid fa-arrow-left"></i>
                    <h4>Volver</h4>
                </a>
            </div>
        </div>
    </header>

    <main>
        <div class="container-form sign-up">
            <div class="welcome-back">
                <div class="message">
                    <h2>Bienvenido de nuevo</h2>
                    <p>Si ya tienes una cuenta, por favor inicia sesión aqui</p>
                    <button class="sign-up-btn">Iniciar sesión</button>
                </div>
            </div>
            <form action="" method="post" class="formulario">
                <div class="formulario__container">
                    <h2 class="create-account">Crear una cuenta</h2>
                    <input name="nombre" type="text" placeholder="Nombres">
                    <input type="text" name="apellido" placeholder="Apellidos">
                    <input name="email" type="email" placeholder="Correo">
                    <select name="rol">
                        <option value="">Selecciona tu cargo</option>
                        <option value="profesor">Profesor</option>
                        <option value="estudiante">Estudiante</option>
                    </select>
                    <input name="pass" type="password" placeholder="Contraseña">
                    <input name="registro" type="submit" onclick="save()" value="Registrarse">
                </div>
            </form>
        </div>
        <div class="container-form sign-in">
            <form action="" method="post" class="formulario">
                <h2 class="create-account">Iniciar Sesión</h2>
                <input name="usuario" type="email" placeholder="Email">
                <input name="pass" type="password" placeholder="Contraseña">
                <input name="ingresar" type="submit" value="Iniciar sesión">
            </form>
            <div class="welcome-back">
                <div class="message">
                    <h2>Bienvenido de nuevo</h2>
                    <p>Si aun no tienes una cuenta, por favor registrese aquí</p>
                    <button class="sign-in-btn">Registrarse</button>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <?php require_once "../layout/footer.php"; ?>
    </footer>

    <script src="../../assets/js/SignUp.js"></script>
</body>

</html>
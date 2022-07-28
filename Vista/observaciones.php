<?php
    session_start();
if(!isset($_SESSION["id"])){
    header("location: ../Vista/login.php");
}
?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Observaciones</title>
    <link rel="stylesheet" href="css/observaciones.css">
    <link rel="stylesheet" type="text/css" href="css/icons.css">
    <link rel="icon" href="img/escudo.png">
</head>

<body>
    <header>
        <img src="img/escudo.png" alt="" class="escudo">
        <div class="menu">
            <a href="admin.php" class="item"><span class="icon-menu">
                </span>Volver al panel</a>
        </div>
        <div class="btn-close">
            <a href="Iniciar%20sesi%C3%B3n.php"><svg id="logo" version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                    <title>switch</title>
                    <path d="M20 4.581v4.249c1.131 0.494 2.172 1.2 3.071 2.099 1.889 1.889 2.929 4.4 2.929 7.071s-1.040 5.182-2.929 7.071c-1.889 1.889-4.4 2.929-7.071 2.929s-5.182-1.040-7.071-2.929c-1.889-1.889-2.929-4.4-2.929-7.071s1.040-5.182 2.929-7.071c0.899-0.899 1.94-1.606 3.071-2.099v-4.249c-5.783 1.721-10 7.077-10 13.419 0 7.732 6.268 14 14 14s14-6.268 14-14c0-6.342-4.217-11.698-10-13.419zM14 0h4v16h-4z"></path>
                </svg></a>
        </div>
    </header>
    <div class="cuerpo">
        <h1>Registrar una nueva observación</h1>
        <form action="../Controlador/control.php" method="post" class="grid">
            <div>
                <label class="lbl-nom">
                <span class="text-nom">Nombre</span>
                <input type="text" name="txtnom">
                </label>
            </div>
            <div>
                <label class="lbl-nom">
                <span class="text-nom">Curso</span>
                <input type="text" name="txtcurso"></label>
            </div>
            <div>
                <label class="lbl-nom"><span class="text-nom">Identidad</span>
                <input type="text" name="txtidenti">
                </label>
            </div>
            <div class="obser">
                <label class="lbl-nom">
                   <span class="text-nom">Observación</span>
                    <textarea name="txtobser" id="" cols="30" rows="10"></textarea>
                </label>
            </div>
            <div class="obser">
               <label class="lbl-nom"><span class="text-nom">Acción tomada</span>
                <textarea name="txtaccion" id="" cols="30" rows="10"></textarea>
                </label>
            </div>
            <button class="btn btn_anadir" name="btn_añadir">Añadir</button>
        </form>
        <script type="text/javascript" src="js/placeh.js"></script>
    </div>
</body>

</html>

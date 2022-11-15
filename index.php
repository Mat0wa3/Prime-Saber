<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema académico</title>
    <link rel="icon" href="./assets/img/escudo.png">
    <link rel="stylesheet" href="./assets/css/s-academico.css">
    <link rel="stylesheet" href="./assets/css/layout.css">
    <script src="https://kit.fontawesome.com/a22bc65f86.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,700;1,400&display=swap" rel="stylesheet">
</head>
<body>
    <header class="header" id="inicio">
        <img src="./assets/img/escudo.png" alt="" class="escudo">
        <img  src="./assets/img/hamburguesa.svg"  alt="" class="hamburguer">
        <nav class="menu-navegacion">
            <div class="options__menu">
                <a href="./Vista/usuario/SignUp.php">
                    <div class="option">
                        <i class="fa-solid fa-key"></i>
                        <h4>Ingresar</h4>
                    </div>
                </a>
                <a href="#portafolio">
                    <div class="option">
                        <i class="fa-solid fa-images"></i>
                        <h4>Portafolio</h4>
                    </div>
                </a>
                <a href="./Vista/mision-vision.php">
                    <div class="option">
                        <i class="fa-sharp fa-solid fa-eye"></i>
                        <h4>Misión y Visión</h4>
                    </div>
                </a>
                <a href="#contacto">
                    <div class="option">
                        <i class="fa-solid fa-address-card"></i>
                        <h4>Contacto</h4>
                    </div>
                </a>
            </div>
        </nav>

        <div class="contenedor head">
            <h1 class="titulo">Institución Educativa Barrio Santander</h1>
            <p class="decoracion">"Hacia una cultura para el desarrollo sostenible"</p>
        </div>
    </header>

    <main>
        <section class="services.contenedor" id="servicio">
            <h2 class="subtitulo">Nuestro servicio</h2>
            <div class="contenedor-servicio">
                <img src="./assets/img/checklist.svg" alt="">
                <div class="checklist-servicio">
                    <div class="service">
                        <h3 class="n-service"><span class="number">1</span>Fortalecimiento de capacidades</h3> 
                        <p>Fortalecer en los jóvenes sus habilidades sociales, y académicas como la identificación y ejercicio de sus derechos.</p>
                    </div>
                    <div class="service">
                        <h3 class="n-service"><span class="number">2</span>Posicionamiento del espíritu emprendedor</h3> 
                        <p>Ofrecer actividades de capacitacion a líderes y maestros con el propósito de promover el espíritu emprendedor en los estudiantes.</p>
                    </div>
                    <div class="service">
                        <h3 class="n-service"><span class="number">3</span>Implementación de proyectos de emprendimiento social y académico</h3> 
                        <p>Promover el emprendimiento en los estudiantes, por medio del desarrollo de proyectos mediante el desarrollo individual y colectivo.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="gallery" id="portafolio">
            <div class="contenedor">
                <h2 class="subtitulo">Galería</h2> 
                <div class="contenedor-galeria">
                    <img class="img-galeria" src="./assets/img/uno.jpg" alt="auditorio">
                    <img class="img-galeria" src="./assets/img/dos.jpg" alt="bloques">
                    <img class="img-galeria" src="./assets/img/tres.jpg" alt="patio">
                    <img class="img-galeria" src="./assets/img/cuatro.jpg" alt="parqueadero">
                    <img class="img-galeria" src="./assets/img/cinco.jpg" alt="huerta">
                    <img class="img-galeria" src="./assets/img/seis.jpg" alt="patio2">
                </div>
            </div>
        </section>
        <section class="imagen-Light">
            <img src="./assets/img/close.svg" alt="" class="close">
            <img src="" alt="" class="agregar-imagen">
        </section>
    <br>
    <br>
    <br>
        <section>
            <div class="contenedor-video">
                <h2 class="subtitulo">Vídeos</h2>
                <center><iframe width="560" height="315" src="https://www.youtube.com/embed/7hcontrols=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></center>
            </div>
        </section>
    </main>
    <footer id="contacto">
        <?php include("./Vista/layout/footer.php") ?>
    </footer>
    <script type="text/javascript" src="./assets/js/s-academico.js"></script>
    <script type="text/javascript" src="./assets/js/lightbox.js"></script>    
</body>
</html>
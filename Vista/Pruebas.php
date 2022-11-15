<?php require_once '../Modelo/parameters.php';?>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pruebas</title>
    <link rel="stylesheet" href="<?php echo url_base() ?>assets/css/card.css">
    <link rel="stylesheet" href="<?php echo url_base() ?>assets/css/layout.css">
</head>
<body>
    <header>
        <?php include('./layout/header.php'); ?>
    </header>

    <main>
        <?php include_once('./Pruebas/vistaPruebas.php'); ?>
    </main>

    <footer>
        <?php include_once('./layout/footer.php'); ?>
    </footer>

</body>
</html>
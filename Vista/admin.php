<?php
session_start();
if(!isset($_SESSION["id"])){
    header("location: ../Vista/login.php");
}
include('../Controlador/conexion.php');
@$id=$_GET['id'];
$consulta="SELECT * FROM registro WHERE id='$id'";
$ejecutar=mysqli_query($conexion,$consulta);

while($row=mysqli_fetch_array($ejecutar)){

$id=$row[0];
$TipoU=$row[1];
$Nombre=$row[2];
$Apellidos=$row[3];
$Telefono=$row[4];
$Genero=$row[5];
$TipoDoc=$row[6];
$Doc=$row[7];
$Email=$row[8];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de control Admin</title>
    <link rel="icon" href="img/escudo.png">
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="css/icons.css">
    <script src="../Controlador/jquery-3.4.0.min.js"></script>
    <script>
        $(document).ready(function() {
            id = $("#id_alumnos").val();

            if (id == "") {
                $("#frm_editar").hide();
            }
        });
    </script>
</head>

<body>
    <input type="hidden" id="id_alumnos" name="id" value="<?php echo $id?>">
    <?php
include('../Controlador/conexion.php');
$sql="SELECT * FROM registro";
$query=mysqli_query($conexion,$sql);            
?>
    <header>
        <img src="img/escudo.png" alt="" class="escudo">
        <div class="menu">
            <div class="item1">
                <a href="Formularios%201.php" class="item"><span class="icon-user-plus">
                    </span>Registrar usuarios</a>
            </div>
            <div class="item1">
                <a href="observaciones.php" class="item"><span class="icon-profile"></span>Observaciones</a>
            </div>
        </div>
        <div class="btn-close">
            <form action="../Controlador/control.php">
                <button name="btn_cerrar" class="btn-close">
                    <a href="#"><?php echo $_SESSION["Nombre"]?></a>
                    <svg id="logo" version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                    <title>switch</title>
                    <path d="M20 4.581v4.249c1.131 0.494 2.172 1.2 3.071 2.099 1.889 1.889 2.929 4.4 2.929 7.071s-1.040 5.182-2.929 7.071c-1.889 1.889-4.4 2.929-7.071 2.929s-5.182-1.040-7.071-2.929c-1.889-1.889-2.929-4.4-2.929-7.071s1.040-5.182 2.929-7.071c0.899-0.899 1.94-1.606 3.071-2.099v-4.249c-5.783 1.721-10 7.077-10 13.419 0 7.732 6.268 14 14 14s14-6.268 14-14c0-6.342-4.217-11.698-10-13.419zM14 0h4v16h-4z"></path>
                </svg>
                </button>
            </form>
        </div>
    </header>
    <div class="cuerpo">
        <table class="tabla">
            <thead>
                <tr>
                    <th class="titulo">Id</th>
                    <th class="titulo">TipoUsuario</th>
                    <th class="titulo">Nombre</th>
                    <th class="titulo">Apellidos</th>
                    <th class="titulo">Telefono</th>
                    <th class="titulo">Genero</th>
                    <th class="titulo">TipoDoc</th>
                    <th class="titulo">Documento</th>
                    <th class="titulo">Correo</th>
                    <th class="titulo">Acciones</th>
                </tr>
            </thead>
            <?php
while($fila=mysqli_fetch_array($query)){

?>
            <tbody>
                <tr>
                    <th class="item"><?php echo $fila['0']?></th>
                    <th class="item"><?php echo $fila['1']?></th>
                    <th class="item"><?php echo $fila['2']?></th>
                    <th class="item"><?php echo $fila['3']?></th>
                    <th class="item"><?php echo $fila['4']?></th>
                    <th class="item"><?php echo $fila['5']?></th>
                    <th class="item"><?php echo $fila['6']?></th>
                    <th class="item"><?php echo $fila['7']?></th>
                    <th class="item"><?php echo $fila['8']?></th>
                    <th class="item"><a class="btn btn_edit" href="admin.php?id=<?php echo $fila['0']?>">Editar</a></th>
                </tr>
                <?php
}
?>
            </tbody>
        </table>
        <div id="frm_editar">
            <h5>Editar Datos</h5>
            <form action="../Controlador/control.php?id=<?php echo $id;?>" class="grid" method="post">
                <div><label class="lbl-nom"><span class="text-nom">Tipo Usuario</span></label><input type="text" name="txtTU" value="<?php echo $TipoU?>"></div>
                <div><label class="lbl-nom"><span class="text-nom">Nombre</span></label><input type="text" name="txtnombre" value="<?php echo $Nombre?>"></div>
                <div><label class="lbl-nom"><span class="text-nom">Apellidos</span></label><input type="text" name="txtlname" value="<?php echo $Apellidos?>"></div>
                <div><label class="lbl-nom"><span class="text-nom">Telefono</span></label><input type="text" name="txttelefono" value="<?php echo $Telefono?>"></div>
                <div><label class="lbl-nom"><span class="text-nom">Genero</span></label><input type="text" name="txtsexo" value="<?php echo $Genero?>"></div>
                <div><label class="lbl-nom"><span class="text-nom">TipoDoc</span></label><input type="text" name="txttid" value="<?php echo $TipoDoc?>"></div>
                <div><label class="lbl-nom"><span class="text-nom">Documento</span></label><input type="text" name="txtdoc" value="<?php echo $Doc?>"></div>
                <div><label class="lbl-nom"><span class="text-nom">Correo</span></label><input type="text" name="txtemail" value="<?php echo $Email?>"></div>
                <br>
                <div><button type="submit" name="btn_actualizar" class="btn btn_actualizar">Actualizar</button>
                    <button type="submit" name="btn_eliminar" class="btn btn_eliminar">Eliminar</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
<?php
$conexion = Database::connect();
@$id = $_GET['id'];

?>

<script>
    function eliminar() {
        var respuesta = confirm("Estas seguro que deseas desactivar?");
        return respuesta;
    }
</script>
<input type="hidden" id="id_alumnos" name="id" value="<?php echo $id ?>">
<?php
$sql = $conexion->query('SELECT * FROM usuario')
?>

<main>
    <div class="cuerpo">
        <table class="tabla">
            <thead>
                <tr>
                    <th class="titulo">Id</th>
                    <th class="titulo">Nombre</th>
                    <th class="titulo">Apellidos</th>
                    <th class="titulo">Correo</th>
                    <th class="titulo">Rol</th>
                    <th class="titulo">Estado</th>
                    <th class="titulo">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include('../Controlador/eliminarControlador.php');
                while ($fila = $sql->fetch_array()) {

                ?>
                    <tr>
                        <td class="item"><?php echo $fila['0'] ?></td>
                        <td class="item"><?php echo $fila['1'] ?></th>
                        <td class="item"><?php echo $fila['2'] ?></td>
                        <td class="item"><?php echo $fila['3'] ?></td>
                        <td class="item"><?php echo $fila['4'] ?></td>
                        <td class="item"><?php echo $fila['7'] ?></td>
                        <td class="item">
                            <a class="btn btn_edit" href="./principal.php?control=editarU&id=<?php echo $fila['0'] ?>"><i class="fa-solid fa-feather"></i></a>
                            <a onclick="return eliminar()" name="eliminar" class="btn btn_eliminar" href="principal.php?control=usuario&id=<?php echo $fila['0'] ?>"><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</main>
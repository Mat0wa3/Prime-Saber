<?php
    if(isset($_REQUEST['btn_registrar'])) {
        include("conexion.php");
        
        $tipousuario = $_POST['Cargo'];
        $nomb        = $_POST['Nombre'];
        $lname       = $_POST['Apellidos'];
        $tel         = $_POST['Telefono'];
        $sex         = $_POST['Sexo'];
        $tid         = $_POST['TDD'];
        $id          = $_POST['Identi'];
        $correo      = $_POST['email'];
        $pass1       = $_POST['clave1'];
        $pass2       = $_POST['clave2'];
            
             $sql = ("INSERT INTO registro (TipoU,Nombre,Apellidos,Telefono,Genero,TipoDoc,Doc,Email,Clave) values ('$tipousuario','$nomb','$lname','$tel','$sex','$tid','$id','$correo','$pass1')");
        $query = mysqli_query($conexion, $sql);
            
        if($query){
            header("location:../Vista/admin.php");
        mysqli_close($conexion);
        }else {
            echo "<script languaje='javascript'>alert('ESTE USUARIO YA HA SIDO REGISTRADO');</script>";
        mysqli_close($conexion);
        }
    }
       
    if(isset($_REQUEST['btn_actualizar'])) {
        include("conexion.php");
        
        $id          = $_GET['id'];
        $tipousuario = $_POST['txtTU'];
        $nomb        = $_POST['txtnombre'];
        $lname       = $_POST['txtlname'];
        $tel         = $_POST['txttelefono'];
        $sex         = $_POST['txtsexo'];
        $tid         = $_POST['txttid'];
        $doc         = $_POST['txtdoc'];
        $correo      = $_POST['txtemail'];
            
             $sql2 = "UPDATE registro SET TipoU='$tipousuario',Nombre='$nomb',Apellidos='$lname',Telefono='$tel',Genero='$sex',TipoDoc='$tid',Doc='$doc',Email='$correo' WHERE id='$id'";
        $query2 = mysqli_query($conexion, $sql2);
            
        if($query2){
        header("location:../Vista/admin.php");
        echo "<script languaje='javascript'>alert('Se ha actualizado con exito');</script>";
        }else {
            echo "<script languaje='javascript'>alert('Error desconocido...');</script>";
        }
    }

if(isset($_REQUEST['btn_eliminar'])){
include("conexion.php");

$idd = $_GET['id'];
$eliminar = "DELETE FROM registro WHERE id='$idd'";
$resultado = mysqli_query($conexion,$eliminar);

if($resultado) {
header("location:../Vista/admin.php");
}else {
echo "<script languaje='javascript'>alert('Error desconocido...');</script>";
}
}

if(isset($_REQUEST['btn_añadir'])){
    include("conexion.php");
    
    $nom = $_POST['txtnom'];
    $curso = $_POST['txtcurso'];
    $identi = $_POST['txtidenti'];
    $obser = $_POST['txtobser'];
    $accion = $_POST['txtaccion'];
    
    $anadir = "INSERT INTO observaciones (Nombre,Curso,Identi,Observacion,Accion) values ('$nom','$curso','$identi','$obser','$accion')";
    $ejecutar = mysqli_query($conexion,$anadir);
    
    if($ejecutar) {
        header("location:../Vista/observaciones.php");
    }else {
        echo "<script languaje='javascript'>alert('Error desconocido...');</script>";
    }
}

if(isset($_REQUEST['btn_cerrar'])){
    session_start();
    session_destroy();
    header("location: ../Vista/login.php");
}
?>
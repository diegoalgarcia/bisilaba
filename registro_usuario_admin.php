<?php 

include("admin/conexion.php");
 
    // este archivo ingresa los usuarios administrativos
    $nombre=$_POST['nombre']; 
	$apellido=$_POST['apellido'];
    $tipo='admin';	
	$email=$_POST['email'];
    $password=$_POST['password'];
    $estado='activo';

    $sql="INSERT INTO administracion (nombre, apellido, tipou, usuario, contrasena, estado)VALUES(:miNom, :miApe, :miTipo, :miEmail, :miContra, :miStatus)";
    $resultado=$base->prepare($sql);

$resultado->execute(array(":miNom"=>$nombre, ":miApe"=>$apellido, ":miTipo"=>$tipo, ":miEmail"=>$email, ":miContra"=>$password, ":miStatus"=>$estado));
/*     */
     $mensaje='error';
     header("location:form_registro.php?mensaje=$mensaje");
     echo "Exito al ingresar el registro de usuario...";
?>
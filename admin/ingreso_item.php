<?php 

include("conexion.php");
 
    // este archivo ingresa los usuarios administrativos
   // $nombre=$_POST['nombre'];                            
    $titulo=$_POST['titulo'];  
	 
    $sql="INSERT INTO item 
          (titulo)
    VALUES(:miTitu)";
    
   $resultado=$base->prepare($sql);

$resultado->execute(array(":miTitu"=>$titulo));
    /* 
     $mensaje='error';
     header("location:form_registro.php?mensaje=$mensaje");*/
     header("location:lista_items.php");
     echo "Exito al ingresar el registro de Modulo...";
?>
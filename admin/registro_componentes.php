<?php 

include("conexion.php");
 
    // este archivo ingresa los usuarios administrativos   
    $id_mod=$_POST['id_mod'];                            
    $titulo=$_POST['titulo'];  
	      
    $sql="INSERT INTO rutainicial
          (	id_mod, titulo)
    VALUES(:miMod, :miTitu)";
    
   $resultado=$base->prepare($sql);

$resultado->execute(array(":miMod"=>$id_mod, ":miTitu"=>$titulo));
    /* 
     $mensaje='error';
     header("location:form_registro.php?mensaje=$mensaje");*/
     header("location:lista_componentes.php?id=$id_mod");
     echo "Exito al ingresar el registro de Modulo...";
?>
<?php

 echo "Desde aqui enviamos a la tabla el item recibido del formulario 
 form_ingresa_items_a_portada";

    include("conexion.php");
     
    $id_item=$_POST["id_item"];
    $id_libro=$_POST["id_libro"];
    
    $sql="INSERT INTO portada_uno 
          (id_item, id_libro)
    VALUES(:miItem, :miLibro)";
    
   $resultado=$base->prepare($sql);
   $resultado->execute(array(":miItem"=>$id_item, ":miLibro"=>$id_libro));

    /* 
     $mensaje='error';
     header("location:form_registro.php?mensaje=$mensaje & dest=$destino");*/
     header("location:lista_portada.php?id_libro=$id_libro");
     echo "Exito al ingresar el registro de Modulo...";

?>
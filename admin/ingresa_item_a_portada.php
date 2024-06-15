<?php

 echo "Desde aqui enviamos a la tabla el item recibido del formulario 
 form_ingresa_items_a_portada";
 /*
 Procedencia: form_ingresa_item_a_portada.php
 Redireccion: lista_portada.php
 */

    include("conexion.php");
// Consulta # 1: ingresa el registro a la tabla  
    $id_item=$_POST["id_item"];
    $id_libro=$_POST["id_libro"];
    $estado=1; 
    
    $sql="INSERT INTO portada_uno 
          (id_item, id_libro)
    VALUES(:miItem, :miLibro)";
    
   $resultado=$base->prepare($sql);
   $resultado->execute(array(":miItem"=>$id_item, ":miLibro"=>$id_libro));

// Consulta # 2: actualiza el campo estado de la tabla item con el id  del item seleccionado  

      $sql="UPDATE 
      item
      SET 
      id_libro=:miLibro,
      estado=:miEst
      WHERE 
      id=$id_item";

      $resultado=$base->prepare($sql);
      $resultado->execute(array(
      ":miLibro"=>$id_libro,
      ":miEst"=>$estado
      ));

    /* 
      ***** Redireccionamiento *****
     $mensaje='error';
     header("location:form_registro.php?mensaje=$mensaje & dest=$destino");*/
     header("location:lista_portada.php?id_libro=$id_libro");
     echo "Exito al ingresar el registro de Modulo...";

?>
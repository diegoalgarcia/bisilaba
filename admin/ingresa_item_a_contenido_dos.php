<?php

 echo "Desde aqui enviamos a la tabla el item recibido del formulario 
 form_ingresa_items_a_contenido_dos";

 /*
 Procedencia: form_ingresa_item_a_contenido_dos.php
 destino: tabla sub_contenido_dos  
 Redireccion: lista_sub_items_dos.php
 */

    include("conexion.php");
// Consulta # 1: ingresa el registro a la tabla  
    
    $id_libro=$_POST["id_libro"]; 
    $idPortada_uno=$_POST["idPortada_uno"];
    $item=$_POST["item"];
    //$con_pdf='no';

    
    $sql="INSERT INTO sub_contenido_dos 
          (item, idPortada_uno)
    VALUES(:miItem, :miId_item)";
    
   $resultado=$base->prepare($sql);
   $resultado->execute(array(":miItem"=>$item, ":miId_item"=>$idPortada_uno));


    //  ***** Redireccionamiento *****
    // $mensaje='error';
    // header("location:form_registro.php?mensaje=$mensaje & dest=$destino");*/
     header("location:lista_sub_items_dos.php?id_libro=$id_libro&idPortada_uno=$idPortada_uno");
     echo "Exito al ingresar el registro de Modulo...";

?>
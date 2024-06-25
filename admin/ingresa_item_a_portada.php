<?php

 echo "Desde aqui enviamos a la tabla el item recibido del formulario 
 form_ingresa_items_a_portada";
 /*
 Procedencia: form_ingresa_item_a_portada.php
 Redireccion: lista_portada.php
 */

    include("conexion.php");
// Consulta # 1: ingresa el registro a la tabla  
    $item=$_POST["item"];
    $id_libro=$_POST["id_libro"];
    $sin_pdf='no';
    
    $sql="INSERT INTO portada_uno 
          (item, id_libro, pdf_ruta)
    VALUES(:miItem, :miLibro, :miSinPdf)";
    
   $resultado=$base->prepare($sql);
   $resultado->execute(array(":miItem"=>$item, ":miLibro"=>$id_libro, ":miSinPdf"=>$sin_pdf));


    //  ***** Redireccionamiento *****
    // $mensaje='error';
    // header("location:form_registro.php?mensaje=$mensaje & dest=$destino");*/
     header("location:lista_portada.php?id_libro=$id_libro");
     echo "Exito al ingresar el registro de Modulo...";

?>
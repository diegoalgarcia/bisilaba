<?php
   //select * from archivos where nombre like "%busca%"

   /* 
   procedencia: form_ingreso_pdf_a_subitem_cuatro.php
   Objetivo:
   Este archivo recibe los parametros e ingresa en la bd tabla 
   la ruta de archivos pdf a los items del sub contenido tres
   sube a la carpeta correspondiente del host los pdf seleccionados (upload)
   
   Destino: lista_sub_items_cuatro.php  
   */
   include("conexion.php");
   
   $id_libro=$_POST['id_libro'];
   $id_item=$_POST['id_item'];
   echo $id_libro;
   echo '<br>';
   echo $id_item;
   echo '<br>';
  var_dump($_FILES["archivo"]["name"]);
  echo '<br>';

   $directorio = "uploads/";
   $archivo = $directorio . basename($_FILES["archivo"]["name"]);
   $archivo2 = $directorio . basename($_FILES["archivo"]["name"]);
   $archivo = utf8_decode($archivo);

   if($_FILES['archivo']['type']=='application/pdf'){
		
    move_uploaded_file($_FILES["archivo"]["tmp_name"], $archivo);

    $sql="UPDATE 
    sub_contenido_cuatro
    SET 
    pdf_ruta=:miRuta
    WHERE 
    id=$id_item";
  
    $resultado=$base->prepare($sql);
    $resultado->execute(array(
    ":miRuta"=>$archivo2
  
    ));

      header("location:lista_sub_items_cuatro.php?id_libro=$id_libro&id_item=$id_item");

    }else {
      echo 'No se pudo cargar el pdf :(';
   
   
     }
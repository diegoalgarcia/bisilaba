<?php
   //select * from archivos where nombre like "%busca%"

   /* 
   procedencia: form_ingresa_pdf_a_portada.php
   Este archivo recibe los parametros e ingresa en la bd tabla 
   la ruta de archivos archivo pdf
   sube a la carpeta correspondiente del host los pdf seleccionados   
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
    portada_uno
    SET 
    pdf_ruta=:miRuta
    WHERE 
    id=$id_item";
  
    $resultado=$base->prepare($sql);
    $resultado->execute(array(
    ":miRuta"=>$archivo2
  
    ));

      header("location:lista_portada.php?id_libro=$id_libro");

    }else {
      echo 'No se pudo cargar el pdf :(';
   
   
     }
/**/

  //  header("location:lista_contenido.php");
   /* 
    Pagina de los siguientes lineas
   https://datoweb.com/post/2952/como-validar-archivos-pdf-con-php

   video 01
    https://youtu.be/GSoFP4HPKvM


    video 02
    Subir Archivos con PHP - APRENDES SÍ O SÍ
    https://youtu.be/X85_BbFgK8s
   */
?>
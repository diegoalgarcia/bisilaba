<?php
   //select * from archivos where nombre like "%busca%"

   /* Este archivo recibe los parametros del archivo: 
   procedencia: form_ingresa_pdf.php 
   e ingresa en la bd tabla pdf_ruta de archivos archivo pdf
   sube a la carpeta correspondiente del host los pdf seleccionados   
   */
   include("conexion.php");

   $texto_enlace=$_POST['texto'];  

   $directorio = "uploads/";
   $archivo = $directorio . basename($_FILES["archivo"]["name"]);
   $archivo2 = $directorio . basename($_FILES["archivo"]["name"]);
   $archivo = utf8_decode($archivo);

   if($_FILES['archivo']['type']=='application/pdf'){
		
    move_uploaded_file($_FILES["archivo"]["tmp_name"], $archivo);
      
    $sql="INSERT INTO pdf_ruta (texto_enlace, ruta)	
    VALUES (:miText, :miRuta)";
      
      $resultado=$base->prepare($sql);

      $resultado->execute(array(":miText"=>$texto_enlace, ":miRuta"=>$archivo2));
      
      header("location:lista_doc_pdf.php");
    }else {
      echo 'No se pudo cargar el pdf :(';
    //  header("location:lista_contenido.php");
    }
 
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
<?php
   //select * from archivos where nombre like "%busca%"
   include("conexion.php");

   $id_mod=$_POST['id_mod'];
   $texto_enlace=$_POST['texto'];  

   $directorio = "uploads/";
   $archivo = $directorio . basename($_FILES["archivo"]["name"]);
   $archivo2 = $directorio . basename($_FILES["archivo"]["name"]);
   $archivo = utf8_decode($archivo);

   if($_FILES['archivo']['type']=='application/pdf'){
		
    move_uploaded_file($_FILES["archivo"]["tmp_name"], $archivo);
      
    $sql="INSERT INTO textos_literarios (id_mod_tl, texto_enlace, ruta_enlace)	
    VALUES (:miIdmodtl, :miText, :miRuta)";
      
      $resultado=$base->prepare($sql);

      $resultado->execute(array(":miIdmodtl"=>$id_mod, ":miText"=>$texto_enlace, ":miRuta"=>$archivo2));
      
      header("location:lista_contenido.php?id=$id_mod");
    }else {
      header("location:lista_contenido.php?id=$id_mod");
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
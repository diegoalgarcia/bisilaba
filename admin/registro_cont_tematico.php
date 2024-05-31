<?php
  
   include("conexion.php");
 
   $id_mod=$_POST['id_mod'];
   $texto_enlace=$_POST['texto'];  

   $directorio = "uploads/";
   $archivo = $directorio . basename($_FILES["archivo"]["name"]);
   $archivo2 = $directorio . basename($_FILES["archivo"]["name"]);
   $archivo = utf8_decode($archivo);
   
   if($_FILES['archivo']['type']=='application/pdf'){
		
      move_uploaded_file($_FILES["archivo"]["tmp_name"], $archivo);
        
        $sql="INSERT INTO contenido_tematico (id_mod_ct, texto_enlace, ruta_enlace)	
        VALUES (:miIdmodct, :miText, :miRuta)";
        
        $resultado=$base->prepare($sql);

        $resultado->execute(array(":miIdmodct"=>$id_mod, ":miText"=>$texto_enlace, ":miRuta"=>$archivo2));
        
        header("location:lista_contenido.php?id=$id_mod");
      }else {
         header("location:lista_contenido.php?id=$id_mod");
      }

   
   /* video 01
    https://youtu.be/GSoFP4HPKvM


    video 02
    Subir Archivos con PHP - APRENDES SÍ O SÍ
    https://youtu.be/X85_BbFgK8s

   Pagina de los siguientes lineas
   https://datoweb.com/post/2952/como-validar-archivos-pdf-con-php
   */
?>
<?php
   //select * from archivos where nombre like "%busca%"

   /* 
   procedencia: form_ingresa_pdf_a_subitem_dos.php
   Este archivo recibe los parametros e ingresa en la bd tabla 
   la ruta de archivos pdf a los items del sub contenido dos
   sube a la carpeta correspondiente del host los pdf seleccionados (upload)
   lista_sub_items_dos.php  
   */
   include("conexion.php");
   
   $id_libro=$_POST['id_libro'];
   $idCont_dos=$_POST['idCont_dos']; 
   $idPortada_uno=$_POST['idPortada_uno']; 

   echo $id_libro;
   echo '<br>';
   echo $idPortada_uno;
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
    sub_contenido_dos
    SET 
    pdf_ruta=:miRuta
    WHERE 
    idCont_dos=$idCont_dos";
  
    $resultado=$base->prepare($sql);
    $resultado->execute(array(
    ":miRuta"=>$archivo2
  
    ));

      header("location:lista_sub_items_dos.php?id_libro=$id_libro&idPortada_uno=$idPortada_uno");

    }else {
      echo 'No se pudo cargar el pdf :(';
   
   
     }
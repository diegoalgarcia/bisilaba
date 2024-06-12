<?php
   //select * from archivos where nombre like "%busca%"

   /* Este archivo recibe los parametros del archivo: 
   procedencia: form_ingresa_pdf_a_portada.php 
   e ingresa en la bd tabla portada_uno 
   y debe asociar el parametro o dato recibido en la portada del texto
   
   Observacion:
   Estado:
     0    = asignado 
     null = no asignado
   */
   include("conexion.php");
                            
    $id_libro=$_POST['id_libro'];
    $id_pdf=$_POST['id_pdf']; 
    $estado=0; 
	 
    $sql="INSERT INTO portada_uno 
          (id_libro, id_pdf, estado)
    VALUES(:miLibro, :miPdf, :miEst)";
    
   $resultado=$base->prepare($sql);

$resultado->execute(array(":miLibro"=>$id_libro, ":miPdf"=>$id_pdf, ":miEst"=>$estado));
    /* 
     $mensaje='error';
     header("location:form_registro.php?mensaje=$mensaje");*/
     header("location:lista_portada.php?id_libro=$id_libro");
     echo "Exito al ingresar el registro de Modulo...";
 
?>
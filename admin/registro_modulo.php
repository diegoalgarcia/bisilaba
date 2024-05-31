<?php 

include("conexion.php");
 
    // este archivo ingresa los usuarios administrativos
    $nombre=$_POST['nombre'];                            
    $titulo=$_POST['titulo'];  
	$autor=$_POST['autor'];         
    $disenio=$_POST['disenio'];	      
	$ilustracion=$_POST['ilustracion'];          
    $editor=$_POST['editor'];    
    $anio=$_POST['anio'];
    $isbm=$_POST['isbm']; 
    $paginas=$_POST['paginas'];   
    $formato=$_POST['formato'];   
    $contenido=$_POST['contenido'];  

    $sql="INSERT INTO modulo 
          (nombre, titulo, autor, disenio, ilustracion, editor, anio, ISBN, paginas, formato, contenido)
    VALUES(:miNom, :miTitu, :miAut, :miDisenio, :miIlust, :miEdit, :miAni, :miIsb, :miPagi, :miForm, :miCont)";
    
   $resultado=$base->prepare($sql);

$resultado->execute(array(":miNom"=>$nombre, ":miTitu"=>$titulo, ":miAut"=>$autor, ":miDisenio"=>$disenio, ":miIlust"=>$ilustracion, ":miEdit"=>$editor, ":miAni"=>$anio, ":miIsb"=>$isbm, ":miPagi"=>$paginas, ":miForm"=>$formato, ":miCont"=>$contenido));
    /* 
     $mensaje='error';
     header("location:form_registro.php?mensaje=$mensaje");*/
     header("location:lista_modulos.php");
     echo "Exito al ingresar el registro de Modulo...";
?>
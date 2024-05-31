<?php
  
 /* borramos el el pdf y tambien el registro con la ruta en la bd */
 include("conexion.php");

 echo 'id del registro ' .  $id_ct=$_GET["id_ct"];
 echo '<br>';
 $ruta=null;
 $id_mod=null;
//se busca en la bd la ruta del archivo
$text=$base->query("SELECT * FROM contenido_tematico WHERE id_ct=$id_ct")->fetchAll(PDO::FETCH_OBJ);
foreach ($text as $directorio):
$ruta = $directorio->ruta_enlace;
$id_mod = $directorio->id_mod_ct;
endforeach;

echo 'Modulo: ' . $id_mod;
echo '<br>';
echo 'Directorio: ' . $ruta;
echo '<br>';

// en la siguiente linea se elimina el archivo seleccionado
unlink($ruta); 
// consulta para eliminar el registro de la bd
$base->query("DELETE  FROM contenido_tematico WHERE id_ct='$id_ct'");

// redireccion automatica 
header("Location: lista_contenido.php?id=$id_mod");

echo 'Registro eliminado exitosamente. el id del modulo es: ' . $id_mod;
?>
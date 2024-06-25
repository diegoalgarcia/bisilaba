<?php
/*
  procedencia: lista portada del boton PDF
  destino: consulta en la base de datos
  redireccion: lista_portada.php
*/
echo 'Vamos a validar si existe el pdf asociado con el item en la base de datos';
echo '<br>';
    include("conexion.php");

    $id_libro=$_GET['id_libro'];
    $id_item=$_GET['id_item'];

    echo $id_libro;
    echo '<br>';
    echo $id_item;
    echo '<br>';

    //$existe=$base->query("SELECT * FROM portada_uno WHERE WHERE id=$id_item AND id_libro=$id_libro")->fetchAll(PDO::FETCH_OBJ);
    $existe=$base->query("SELECT * FROM portada_uno WHERE id=$id_item AND id_libro=$id_libro")->fetchAll(PDO::FETCH_OBJ);
    foreach ($existe as $si_no):  
        $comprobarpdf=$si_no->pdf_ruta;
    endforeach;  
    echo '<br>';
    var_dump ($comprobarpdf);
    echo '<br>';
    if ($comprobarpdf == 'no') {
       echo 'no hay pdf, redireccionar a formulario con mensaje que no hay archivo asociado';
       header("location:form_ingresa_pdf_a_portada.php?id_libro=$id_libro&id_item=$id_item");
    }else {
      echo 'falta implementar debe ir a mostrar el pdf';
        header("location:$comprobarpdf");
       var_dump ($comprobarpdf);
    }



?>
<?php
/*
  procedencia: lista_sub_items_dos.php del boton PDF
  destino: consulta en la base de datos
  
  funcionalidad: busca en la tabla sub_contenido_dos con el id del items
                si el registro tiene un pdf asociado.
   validacion 1 en caso si:
               lo redirige en una pagina aparte a la direccion y muestra el archivo 
   validacion 2 en caso no:
               lo debe redirigir a vista con formulario para seleccion de archivo en el equipo
  
*/
echo 'Vamos a validar si existe el pdf asociado con el sub item en la base de datos';
echo '<br>';
    include("conexion.php");

    $id_libro=$_GET['id_libro'];
    $id_item=$_GET['id_item'];

    echo $id_libro;
    echo '<br>';
    echo $id_item;
    echo '<br>';
    
    $existe=$base->query("SELECT * FROM sub_contenido_dos WHERE id=$id_item")->fetchAll(PDO::FETCH_OBJ);
    foreach ($existe as $si_no):  
        $comprobarpdf=$si_no->pdf_ruta;
    endforeach;  
    echo '<br>';
    var_dump ($comprobarpdf);
    echo '<br>';
    if ($comprobarpdf == 'no') {
       echo 'no hay pdf, redireccionar a formulario con mensaje que no hay archivo asociado';
       header("location:form_ingreso_pdf_a_subitem_dos.php?id_libro=$id_libro&id_item=$id_item");
    }else {
      echo 'falta implementar debe ir a mostrar el pdf';
        header("location:$comprobarpdf");
       var_dump ($comprobarpdf);
    }



?>
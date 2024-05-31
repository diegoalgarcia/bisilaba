<?php
  //eliminar archivos pdf con php

// Archivo dentro de la carpeta
unlink('ruta/a/tu/archivo.pdf');

// Archivo en la misma ruta que el documento PHP
unlink('documento.pdf');

echo "Archivo eliminado correctamente";


/// ===============  Eliminar todos los archivos de una carpeta

  // Ruta completa a la carpeta que contiene los archivos PDF
  $rutaCarpeta = 'ruta/completa/a/la/carpeta';
  
  // Verifica si la carpeta existe antes de continuar
  if (file_exists($rutaCarpeta)) {
      // Obtiene la lista de archivos en la carpeta
      $archivos = glob($rutaCarpeta . '/*.pdf');
  
      // Elimina cada archivo
      foreach ($archivos as $archivo) {
          unlink($archivo);
      }
  
      echo "Todos los archivos PDF han sido eliminados correctamente.";
  } else {
      echo "La carpeta especificada no existe.";
  }

  



  ?>
  


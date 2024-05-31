<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <form accept-charset="utf-8">
    <meta http-equiv="content-type" content="text/html; charset=ISO-8859-1">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php
  header("Content-Type: text/html;charset=utf-8");
  $directorio = "uploads/";
  $archivo = $directorio . basename($_FILES["archivo"]["name"]);

  $archivo = utf8_decode($archivo);

  move_uploaded_file($_FILES["archivo"]["tmp_name"], $archivo);

// esta guardado en utf-8, pero la pagina se muestra con ISO-8859.
//https://xaviesteve.com/354/acentos-y-enes-aparecen-mal-a%c2%b1-en-php-con-mysql-utf-8-iso-8859-1/

//default_charset = 'utf-8';  select * from archivos where nombre like "%busca%"
?>
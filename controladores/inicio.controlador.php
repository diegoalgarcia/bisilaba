<?php

//require_once "modelos/producto.php";

class InicioControlador{
    private $modelo;

    public function __CONSTRUCT(){
       // $this->modelo=new Producto();
    }

    public function Inicio(){
      // la siguiente linea se hace para probar si funciona este controlador
      //  echo "Este es el controlador de Inicio";
      require_once "vistas/encabezado.php";
      require_once "vistas/inicio/principal.php";
      require_once "vistas/pie.php";
    }

}


?>
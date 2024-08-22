<?php

//require_once "modelos/producto.php";

class ListinicialControlador{ 
    private $modelo;

    public function __CONSTRUCT(){
       // $this->modelo=new Producto();
    }

    public function Inicio(){
      require_once "vistas/encabezado.php";
      require_once "vistas/listinicial/index.php";
      require_once "vistas/pie.php";
    }

}


?>
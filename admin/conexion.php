<?php

   try {

    $base=new PDO('mysql:host=localhost; dbname=helise_estrategia2', 'root', '');
/*
         
        $base=new PDO('mysql:host=localhost; dbname=heliseco_helise', 'heliseco_ingeniero', 'h+8Lu)CzJ[+5');
     */    
       $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $base->exec("SET CHARACTER SET UTF8");

   } catch (Exception $e) {
       die('Error' . $e->getMessage());
       echo "Línea del error " . $e->getLine;
   }
   

?>
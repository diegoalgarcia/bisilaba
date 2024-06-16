<?php
  // -------- Inicio primer try buscando usuario

  $modo='1'; 

  try {
    
//  $base=new PDO('mysql:host=localhost; dbname=heliseco_helise', 'heliseco_ingeniero', 'h+8Lu)CzJ[+5');

     $base=new PDO("mysql:host=localhost; dbname=helise_estrategia2", "root", "");

  	$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  	$sql="SELECT * FROM administracion WHERE usuario= :miLogin AND contrasena	= :miPassword "; 
  	$resultado=$base->prepare($sql);
  	$login=htmlentities(addslashes($_POST['login-email']));
  	$password=htmlentities(addslashes($_POST['login-password']));
  	$resultado->bindValue(":miLogin", $login);
    $resultado->bindValue(":miPassword", $password);

    //$resultado->bindValue(":miStat", $modo); 

    $resultado->execute();

    $numero_registro=$resultado->rowCount();

    

    // inicio primer if usuario
    
    if ($numero_registro !=0) {

    //  $suTipo=$base->query("SELECT * FROM user WHERE login = '$login'")->fetchAll(PDO::FETCH_OBJ);

     // foreach ($suTipo as $rol) :
     //   $miTipo=$rol->tipo; // id de la sede
    //   endforeach;

      //  if ($miTipo==1) {

      session_start();
      $_SESSION['usuario']=$_POST['login-email'];

        header("location: admin");
    
    // }elseif ($miTipo==2) {
    //  session_start();
    //  $_SESSION['usuario']=$_POST['login'];

    //    header("location: admin-master/panel_secretaria.php");
    //  }
     }else{

    $mensaje='error';
     //     $mensaje='error';          
    //       header("Location: index.php?mensaje=$mensaje");
    header("Location: form_login.php?mensaje=$mensaje");
    } 

  }catch (Exception $e) {
  	die("Error: " . $e->getMessage());
  }
   // hace falta cerrar la conexion

/*
      validacion de login y secciones
      https://www.youtube.com/watch?v=QD8rp50Vypo

       Niveles de usuarios PHP y MySQL: Ejemplo Completo
      https://baulphp.com/niveles-de-usuarios-php-y-mysql-ejemplo-completo/
         
 */   
?>
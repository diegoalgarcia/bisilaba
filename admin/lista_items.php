<?php  
      header('Content-Type: text/html; charset=UTF-8');
      session_start();
       if(!isset($_SESSION["usuario"])){
          header("location: ../");

          // se debe redireccionar al nuevo archivo de login 
       }
       include("conexion.php");
       //$id_mod=$_GET['id_mod'];
       // $id=$_GET['id'];   id del siguiente subnivel

       $subnivel=$base->query("SELECT * FROM portada_uno")->fetchAll(PDO::FETCH_OBJ);
       foreach ($subnivel as $portada):
           $titulo=$portada->id_item;
       endforeach;
/*
       $numero=$base->query("SELECT * FROM libros WHERE id=$id_mod")->fetchAll(PDO::FETCH_OBJ);
       foreach ($numero as $modulo):
           $texto=$modulo->nombre;
       endforeach;

       */
?>
<!--
   Descripcion de la funcionalidad del archivo:

   Objetivo  principal: despliega o muestra los items 
                      
   1. Desde esta vista por medio de boton se envia de ingreso de items
   2. Debe mostrar los registros asociados de la tabla de item

   secuencia para ver lista de items (Titúlos):
   ------------------------------------
   dashboard index.php -> lista_items_portada.php

   secuencia para ver lista de componentes (contenido) de la portada o primer nivel:
   ------------------------------------
   index.php -> lista_modulos.php -> lista_componentes.php 

-->
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Dashboard - Lista portada</title>

    <!-- Meta -->
    <meta name="description" content="Marketplace for Bootstrap Admin Dashboards" />
    <meta name="author" content="Bootstrap Gallery" />
    <link rel="canonical" href="https://www.bootstrap.gallery/">
    <meta property="og:url" content="https://www.bootstrap.gallery">
    <meta property="og:title" content="Admin Templates - Dashboard Templates | Bootstrap Gallery">
    <meta property="og:description" content="Marketplace for Bootstrap Admin Dashboards">
    <meta property="og:type" content="Website">
    <meta property="og:site_name" content="Bootstrap Gallery">
    <link rel="shortcut icon" href="assets/images/favicon.svg" />

    <!-- *************
			************ CSS Files *************
		************* -->
    <link rel="stylesheet" href="assets/fonts/bootstrap/bootstrap-icons.css" />
    <link rel="stylesheet" href="assets/css/main.min.css" />

    <!-- *************
			************ Vendor Css Files *************
		************ -->

    <!-- Scrollbar CSS -->
    <link rel="stylesheet" href="assets/vendor/overlay-scroll/OverlayScrollbars.min.css" />
  </head>

  <body>

    <!-- Page wrapper starts -->
    <div class="page-wrapper">

      <!-- Main container starts -->
      <div class="main-container">

        <!-- Sidebar wrapper starts -->
        <nav id="sidebar" class="sidebar-wrapper">

          <!-- App brand starts -->
          <div class="app-brand p-3 mb-3">
            <a href="index.php">
              <img src="assets/images/logo.png" class="logo" alt="Seven Bootstrap Template" />
            </a>
          </div>
          <!-- App brand ends -->

          <!-- Sidebar menu starts -->
          <?php include 'secciones/navegacion.php'; ?>
          <!-- Sidebar menu ends -->

          <!-- Sidebar settings starts -->
          <div class="sidebar-settings gap-1 d-lg-flex d-none">
            <a href="profile.html" class="settings-icon" data-bs-toggle="tooltip" data-bs-placement="top"
              data-bs-custom-class="custom-tooltip-danger" title="Profile">
              <i class="bi bi-person"></i>
            </a>
            <a href="tasks.html" class="settings-icon" data-bs-toggle="tooltip" data-bs-placement="top"
              data-bs-custom-class="custom-tooltip-warning" title=" Tasks">
              <i class="bi bi-clipboard-check"></i>
            </a>
            <a href="widgets.html" class="settings-icon" data-bs-toggle="tooltip" data-bs-placement="top"
              data-bs-custom-class="custom-tooltip-success" title=" Widgets">
              <i class="bi bi-box"></i>
            </a>
            <a href="settings.html" class="settings-icon" data-bs-toggle="tooltip" data-bs-placement="top"
              data-bs-custom-class="custom-tooltip-info" title=" Settings">
              <i class="bi bi-gear"></i>
            </a>
            <a href="cierra_sesion.php" class="settings-icon" data-bs-toggle="tooltip" data-bs-placement="top"
              data-bs-custom-class="custom-tooltip-secondary" title="Salir">
              <i class="bi bi-power"></i>
            </a>
          </div>
          <!-- Sidebar settings ends -->

        </nav>
        <!-- Sidebar wrapper ends -->

        <!-- App container starts -->
        <div class="app-container">

          <!-- App header starts -->
          <div class="app-header d-flex align-items-center">

            <!-- Toggle buttons starts -->
            <div class="d-flex">
              <button class="pin-sidebar">
                <i class="bi bi-list lh-1"></i>
              </button>
            </div>
            <!-- Toggle buttons ends -->

            <!-- App brand sm starts -->
            <div class="app-brand-sm d-lg-none d-flex">
              <a href="index.php">
                <img src="assets/images/logo-sm.png" class="logo" alt="Seven Bootstrap Template" />
              </a>
            </div>
            <!-- App brand sm ends -->

            <!-- Breadcrumb starts -->
            <div class="d-flex align-items-center ms-3">
              <h5 class="m-0">Listado de Items <?php // echo $texto; ?></h5>
            </div>
            <!-- Breadcrumb ends -->

            <!-- App header actions starts -->
            <div class="header-actions">

              <!-- Search container starts -->
              <div class="search-container d-xl-block d-none mx-3">
                <input type="text" class="form-control" id="searchData" placeholder="Buscar" />
                <i class="bi bi-search"></i>
              </div>
              <!-- Search container ends -->

              <!-- Header list starts -->
              <div class="d-sm-flex d-none gap-3">
                
              </div>
              <!-- Header list ends -->

              <!-- User setting starts -->
              <div class="dropdown ms-4">
                <a id="userSettings" class="dropdown-toggle d-flex py-2 align-items-center" href="#!" role="button"
                  data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="assets/images/user3.png" class="rounded-4 img-3x" alt="Bootstrap Gallery" />
                  <div class="ms-2 text-truncate d-lg-flex flex-column d-none">
                    <p class="text-truncate m-0">Administrador</p>
                    <span class="small opacity-50 lh-1">Admin</span>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end shadow-lg">
                  <a class="dropdown-item d-flex align-items-center" href="profile.html"><i
                      class="bi bi-person fs-5 me-2"></i>Mi Perfil</a>
                  <a class="dropdown-item d-flex align-items-center" href="settings.html"><i
                      class="bi bi-gear fs-5 me-2"></i>Ajustes</a>
        
                  <div class="mx-3 mt-2 d-grid">
                    <a href="cierra_sesion.php" class="btn btn-primary">Salir</a>
                  </div>
                </div>
              </div>
              <!-- User setting ends -->

              <!-- Toggle sidebar starts -->
              <div class="d-flex">
                <button class="toggle-sidebar">
                  <i class="bi bi-list lh-1"></i>
                </button>
              </div>
              <!-- Toggle sidebar ends -->

            </div>
            <!-- App header actions ends -->

          </div>
          <!-- App header ends -->

          <!-- App body starts -->
          <div class="app-body">
                <!-- Row starts -->
            <div class="row">
              <div class="col-12">
                <div class="card mb-4">
                  <div class="card-header">
                    <h5 class="card-title">Ingresar Items (Títulos)</h5>
                  </div>
                  <!-- Parametro recibido del archivo lista_modulos -->
                 
                  
                      <div class="d-grid m-3">
                          <a href="form_ingreso_items.php" class="btn btn-info">
                          <i class="bi bi-plus-circle"></i> Agregar</a>
                      </div>
                </div>
              </div>
             
              <div class="col-12">
                <div class="card mb-4">
                  <div class="card-header">
                    <h5 class="card-title">Listado Ítem </h5>
                  </div>
                  <div class="card-body">
                    <!-- inicio tabla -->

                    <div class="table-outer">
                                <div class="table-responsive">
                                    <table class="table align-middle table-hover m-0 truncate">
                                      <thead>
                                        <tr>
                                          <th scope="col">Nro</th>
                                          <th scope="col">Título</th>
                                          <th scope="col">Ver</th>
                                          <!--<th scope="col">Actualiza</th>-->
                                          <th scope="col">Elimina</th>
                                        </tr>
                                      </thead>

                                      <tbody>
                                              <?php
                                              
                                                include("conexion.php");
                                                $items=$base->query("SELECT * FROM item")->fetchAll(PDO::FETCH_OBJ);
                                                foreach ($items as $titulo):  
                                                
                                                ?>
                                        <tr>
                                          
                                          <td><?php echo $titulo->id?></td>
                                          <td><?php echo $titulo->titulo?></td>
                                          <td>
                                            <a class="btn btn-primary btn-sm" href="<?php // echo  ?>"><i class="bi bi-pencil"></i>
                                            </a>
                                          </td><!--
                                          <td>
                                            <a class="btn btn-primary btn-sm" href="#"><i class="bi bi-pencil"></i>
                                            </a>
                                          </td>  -->
                                          <td>
                                            <a class="btn btn-primary btn-icon btn-sm mb-1" href="borrar_con_tematico.php?id_ct=<?php // echo $lista->id_ct; ?>"><i class="bi bi-trash"></i>
                                            </a>
                                          </td>
                                        </tr>
                                        <?php endforeach; ?>
                                      </tbody>
                                    </table>
                                  </div>
                                </div>

                            </div>
                    
                    <!-- fin tabla -->
                  </div>
                </div>
              </div>

              <!--
              <div class="col-12">
                <div class="card mb-4">
                  <div class="card-header">
                    <h5 class="card-title">Listado documentos asociados</h5>
                  </div>
                  <div class="card-body">
                      !-- Inicio tabla 2 --
                      <div class="table-outer">
                                <div class="table-responsive">
                                    <table class="table align-middle table-hover m-0 truncate">
                                      <thead>
                                        <tr>
                                          <th scope="col">Nro</th>
                                          <th scope="col">Texto del enlace</th>
                                          <th scope="col">Ver</th>
                                          <!--<th scope="col">Actualiza</th>--
                                          <th scope="col">Elimina</th>
                                        </tr>
                                      </thead>

                                      <tbody>
                                              <?php
                                                
                                                $text_lit=$base->query("SELECT * FROM pdf_ruta ")->fetchAll(PDO::FETCH_OBJ);
                                                foreach ($text_lit as $lista2):
                                                // code...
                                                ?>
                                        <tr>
                                          
                                          <td><?php // echo $lista2->id_tl?></td>
                                          <td><?php // echo $lista2->texto_enlace?></td>
                                          <td>
                                            <a class="btn btn-primary btn-sm" href="<?php echo $lista2->ruta; ?>"><i class="bi bi-pencil"></i>
                                            </a>
                                          </td><!--
                                          <td>
                                            <a class="btn btn-primary btn-sm" href="#"><i class="bi bi-pencil"></i>
                                            </a>
                                          </td>  --
                                          <td>
                                            <a class="btn btn-primary btn-icon btn-sm mb-1" href="borrar_con_literario.php?id_tl=<?php // echo $lista2->id_tl; ?>"><i class="bi bi-trash"></i>
                                            </a>
                                          </td>
                                        </tr>
                                        <?php endforeach; ?>
                                      </tbody>
                                    </table>
                                  </div>
                                </div>

                            </div>

                      
                      <!-- fin tabla 2 --
                  </div>
                </div>
              </div>
              -->
             
            </div>
            <!-- Row ends -->

          </div>
          <!-- App body ends -->
          
          <!-- App footer starts -->
          <div class="app-footer">
            <span class="small">© Bootstrap Gallery 2024</span>
          </div>
          <!-- App footer ends -->

        </div>
        <!-- App container ends -->

      </div>
      <!-- Main container ends -->

    </div>
    <!-- Page wrapper ends -->

    <!-- *************
			************ JavaScript Files *************
		************* -->
    <!-- Required jQuery first, then Bootstrap Bundle JS -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/moment.min.js"></script>

    <!-- *************
			************ Vendor Js Files *************
		************* -->

    <!-- Overlay Scroll JS -->
    <script src="assets/vendor/overlay-scroll/jquery.overlayScrollbars.min.js"></script>
    <script src="assets/vendor/overlay-scroll/custom-scrollbar.js"></script>

    <!-- Custom JS files -->
    <script src="assets/js/custom.js"></script>
  </body>

</html>
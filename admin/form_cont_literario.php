<?php  
       session_start();
       if(!isset($_SESSION["usuario"])){
          header("location: ../");

          // se debe redireccionar al nuevo archivo de login 
       }
       include("conexion.php");

       $id_mod=$_GET['id_mod'];
?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Dashboard - Ingreso Textos Literarios</title>

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
              <h5 class="m-0">Formulario de registro de Textos Literarios</h5>
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

                    <!-- ============================================================ -->
                    <!-- Inicio de contenedores  -->
                    <!-- ============================================================ -->

                <!-- App body starts -->
                <div class="app-body">

                       <!-- Row starts -->
            <div class="row">
              <div class="col-sm-12">
                <div class="card mb-4">
                  <div class="card-body">
                    <!--
                    <form action="registro_cont_literario.php" method="post" enctype="multipart/form-data" class="row g-3 needs-validation" novalidate>
                    -->
                    <form action="registro_cont_literario.php" method="post" enctype="multipart/form-data" class="row g-3 needs-validation" novalidate>  
                      <input type="hidden" name="id_mod" value="<?php echo $id_mod; ?>">
                      <div class="col-md-12">
                        <label for="validationCustom01" class="form-label">Texto del Enlace</label>
                        <input type="text" name="texto" class="form-control" id="validationCustom01" required />
                        <div class="invalid-feedback">
                        <!--<div class="valid-feedback">Looks good!</div>-->
                          Campo requerido.
                        </div>
                      </div>
                         
                        <div class="col-md-6 col-sm-12 col-12">
                            <div class="card mb-4">
                            <div class="card-body">
                                <div class="was-validated">
                                <input type="file" name="archivo" class="form-control" aria-label="file example" required="" />
                                <div class="invalid-feedback">
                                    No se ha seleccionado archivo
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-12">
                          <button class="btn btn-primary" type="submit">
                            Registrar
                          </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
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
    <script src="assets/js/validations.js"></script>
  </body>

</html>
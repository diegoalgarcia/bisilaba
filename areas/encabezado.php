<header>
      <nav class="main-menu">
        <div class="container">
          <div class="main-menu__block">
            <div class="main-menu__left">
              <div class="main-menu__logo">
                <a href="index.php">
                  <img src="assets/media/logo.png" alt="Educate">
                </a>
              </div>
              <div class="main-menu__nav">
                <ul class="main-menu__list">
                  <li class="dropdown">
                    <a href="javascript:void(0);" class="active">Inicio</a>
                    <ul>
                      <li><a href="index.php">Inicio</a></li>
                      
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a href="javascript:void(0);">Módulos</a>
                    <ul class="sub-menu">
                      <li class="dropdown">
                          <?php
                            include("admin/conexion.php");
                            $cont_te=$base->query("SELECT * FROM modulo")->fetchAll(PDO::FETCH_OBJ);
                            foreach ($cont_te as $lista):
                          ?>
                        <li><a href="lista_inicial.php?id=<?php echo $lista->id; ?>"><?php echo "Módulo " . $lista->nombre; ?></a></li>
                          <?php endforeach; ?>
                      </li>
                      
                  </ul>
                  </li>
                  <li><a href="helise.php">HELISE</a></li>
                  
                  <li class="dropdown ">
                    <a href="javascript:void(0);">Plan Lector</a>
                    <ul>
                      <li><a href="about.php">Nosotros</a></li>
                    </ul>
                  </li>
                  <li><a href="contact.php">Cuestionarios tipo saber</a></li>
                </ul>
              </div>
            </div>
            <div class="main-menu__right">
              <a href="#" class="main-menu__search search-toggler">
                <i class="fal fa-search"></i>
              </a>
              <a href="form_login.php" class="main-menu__login">
                <i class="fal fa-user"></i>
              </a>
              <a href="contact.php" class="educate-btn sm d-xl-flex d-none"><span
                  class="educate-btn__curve"></span>Contactenos</a>
              <a href="#" class="main-menu__toggler mobile-nav__toggler">
                <i class="fa fa-bars"></i>
              </a>
            </div>
          </div>
        </div>
      </nav>
    </header>
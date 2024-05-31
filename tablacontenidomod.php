<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Educate Html 5 Template">

    <title>HELISE || Rapides visual - comprensión lectora</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/media/favicon.png">

    <!-- All CSS files -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendor/fontawesome/font-awesome.css">
    <link rel="stylesheet" href="assets/vendor/slickslider/slick.css">
    <link rel="stylesheet" href="assets/vendor/jquery-magnific-popup/jquery.magnific-popup.css">
    <link rel="stylesheet" href="assets/vendor/animate/animate.min.css">
    <link rel="stylesheet" href="assets/vendor/odometer/odometer.min.css">
    <link rel="stylesheet" href="assets/vendor/nice-select/nice-select.css">
    <link rel="stylesheet" href="assets/css/app.css">

</head>

<body class="custom-cursor locked">

    <!-- cursor style  -->
    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <!-- Preloader-->
    <div id="preloader">
        <div class="book">
            <div class="inner">
                <div class="left"></div>
                <div class="middle"></div>
                <div class="right"></div>
            </div>
            <ul>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>
    </div>

    <!-- Main Wrapper Start -->
    <div id="main-wrapper" class="main-wrapper">
        <!-- Header Area start -->
        <?php include('areas/encabezado.php'); ?>
        <!-- Sticky Header -->
        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div>
        </div>
        <!-- Header Area End  -->

        <!-- Page Title Banner Start -->
        <section class="page_title_banner">
            <div class="container">
                <div class="content">
                    <div class="title">
                        <h1>Modulo Rojo</h1>
                        <img src="assets/media/shapes/tag-2.png" alt="" class="tag">
                    </div>
                    <div class="educate-tilt"
                        data-tilt-options='{ "glare": false, "maxGlare": 0, "maxTilt": 2, "speed": 700, "scale": 1 }'>
                        <img src="assets/media/resources/page_title.png" alt="" class="main_img">
                    </div>
                    <img src="assets/media/shapes/circle-lines-2.png" alt="" class="circle_vector">
                </div>
            </div>
        </section>
        <!-- Page Title Banner End -->

        <!-- join Team Area Start -->
        <section class="join_team py-60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <h6 class="color-primary mb-8">–––– Tabla de Contenido</h6>
                        <h2 class="mb-16">Tabla de Contenido<!--<br> Drop Us <span class="fm-sec">Your CV!</span>-->
                        </h2>
                        <!--
                        <p class="mb-32">Lorem ipsum dolor sit amet consectetur. Non convallis sed id <br>aliquam
                            tempus. Volutpat
                            tortor tincidunt egestas sit risus donec.</p>-->
                        <div class="block mb-16">
                            <h5 class="mb-8">Presentación</h5>
                            <h5 class="mb-8">Derechos Básicos de Aprendizaje - Área de Lenguaje -</h5>
                            <h5 class="mb-8">Grados 3º, 4º y 5º</h5>
                            <h5 class="mb-8">Evidencias de Aprendizaje desde los DBA</h5>
                            <!--
                            <p class="mb-16">Lorem ipsum dolor sit amet consectetur. Non convallis sed id aliquam
                                tempus. Volutpat tortor tincidunt egestas sit risus donec. Non convallis sed id aliquam
                                tempus. </p>-->
                            <br>
                            <h5 class="mb-8">CONTENIDO TEMÁTICO</h5>
                            <ul class="unstyled rules">
                                <?php
                                   include("admin/conexion.php");
                                   $cont_te=$base->query("SELECT * FROM contenido_tematico")->fetchAll(PDO::FETCH_OBJ);
                                   foreach ($cont_te as $lista):
                                ?>
                                <li class="mb-16"><i class="fal fa-check"></i>
                                    <p><a href="<?php echo "admin/" . $lista->ruta_enlace; ?>"><?php echo  $lista->texto_enlace; ?></a></p>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                            <h5 class="mb-8">TEXTOS LITERARIOS</h5>
                            <ul class="unstyled rules">
                                <?php          
                                   $text_lit=$base->query("SELECT * FROM textos_literarios")->fetchAll(PDO::FETCH_OBJ);
                                   foreach ($text_lit as $lista2):
                                ?>
                                <li class="mb-16"><i class="fal fa-check"></i>
                                    <p><a href="<?php echo "admin/" .$lista2->ruta_enlace; ?>"><?php echo $lista2->texto_enlace?></a></p>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <!--
                        <div class="block">
                            <h5 class="mb-16">Qualification Requirement</h5>
                            <p class="mb-16">Lorem ipsum dolor sit amet consectetur. Non convallis sed id aliquam
                                tempus. Volutpat tortor tincidunt egestas sit risus donec. Lorem ipsum dolor sit amet
                                consectetur. Non convallis sed id aliquam tempus. Volutpat tortor tincidunt egestas sit
                                risus donec.Lorem ipsum dolor sit amet consectetur. Non convallis sed id aliquam tempus.
                                Volutpat tortor tincidunt egestas sit risus donec.Lorem ipsum dolor sit amet
                                consectetur. Non convallis sed id aliquam tempus. Volutpat tortor tincidunt egestas sit
                                risus donec.</p>
                        </div>
                         -->
                    </div>
                    <div class="col-lg-5">
                        <div class="join_form_block">
                            <h4 class="mb-24">Formulario Contacto</h4>
                            <form action="join.html" class="form-validator">
                                <div class="mb-24">
                                    <input type="text" class="form-control" name="first-name" required
                                        placeholder="Nombres y Apellido">
                                </div>
                                <div class="mb-24">
                                    <input type="email" class="form-control" name="email" required placeholder="Email">
                                </div>
                                <div class="mb-24">
                                    <input type="tel" class="form-control" name="tel" required
                                        placeholder="Número de Telefono">
                                </div>
                                <button type="submit" class="educate-btn"><span class="educate-btn__curve"></span>Suscribirme</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- join Team Area End -->

        <!-- Footer Area Start -->
        <?php include('areas/pie.php') ?>
        <!-- Footer Area End -->

    </div>

    <!-- Mobile Menu Start -->
    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>
            <div class="logo-box">
                <a href="index.html" aria-label="logo image"><img src="assets/media/logo-light.png" alt="educate"></a>
            </div>
            <div class="mobile-nav__container"></div>
            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fas fa-envelope"></i>
                    <a href="mailto:example@company.com">example@company.com</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:+12345678">+123 (4567) -890</a>
                </li>
            </ul>
            <div class="mobile-nav__social">
                <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                <a href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a>
                <a href="https://www.pinterest.com/"><i class="fab fa-pinterest-p"></i></a>
                <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
    <!-- Mobile Menu End -->

    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <div class="search-popup__content">
            <form role="search" method="get" class="search-popup__form" action="index.html">
                <input type="text" id="search" placeholder="Busqueda...">
                <button type="submit"><i class="fal fa-search"></i></button>
            </form>
        </div>
    </div>
    <!-- search-popup -->

    <!-- back-to-top-start -->
    <a href="#" class="scroll-top">
        <svg class="scroll-top__circle" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </a>
    <!-- back-to-top-end -->

    <!-- Jquery Js -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery/jquery-3.6.3.min.js"></script>
    <script src="assets/vendor/jquery-appear/jquery-appear.js"></script>
    <script src="assets/vendor/jquery-validator/jquery-validator.js"></script>
    <script src="assets/vendor/odometer/odometer.min.js"></script>
    <script src="assets/vendor/countdown/jquery.countdown.min.js"></script>
    <script src="assets/vendor/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="assets/vendor/slickslider/slick.min.js"></script>
    <script src="assets/vendor/tilt/tilt.jquery.js"></script>
    <script src="assets/vendor/nice-select/jquery.nice-select.min.js"></script>
    <script src="assets/vendor/wow/wow.js"></script>

    <!-- Site Scripts -->
    <script src="assets/js/app.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Educate Html 5 Template">

    <title>Helise || rapidez visual</title>

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
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        <!-- Header Area End  -->
        <!-- Login Area Start -->
        <section class="form_page">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="form_block">
                            <div class="text_block">
                                <a href="index.php" class="educate_link_btn color-primary h6 mb-48"><i
                                        class="far fa-chevron-left"></i> Regresar al inicio</a>
                                <div class="title">
                                    <!--
                                    <img src="assets/media/shapes/mic-speaker.png" alt="" class="speaker_icon">
                                    -->
                                    <h2 class="mb-48">Login</h2>
                                </div>
                                
                                <div class="row">
                                    <div class="mb-24">
                                        <?php    
                                        
                                        if (!empty($_GET["mensaje"])) { ?>
                                        <a href="" class="link-btn h6 mb-24"><img
                                                src="assets/media/icons/Support.png" alt="">Usuario o contraseña incorrectos.</a>
                                        <?php   }   ?>
                                    </div>
                                    <!-- 
                                    <div class="col-sm-6">
                                        <a href="" class="link-btn h6 mb-24"><img
                                                src="assets/media/icons/brands/facebook-icon.png" alt="">Loguearse   Facebook</a>
                                    </div>
                                    -->
                                </div>
                                
                                <h5 class="or mb-4p">--</h5>
                                <div class="text-center">
                                    <!--
                                    <h6 class="mb-24">Login with your email address</h6>
                                    -->
                                </div>
                                <form action="login_db.php" method="post" class="form-validator">
                                    <div class="mb-24">
                                        <input type="email" class="form-control p_lg" id="login-email"
                                            name="login-email" required placeholder="Email">
                                    </div>
                                    <div class="mb-24">
                                        <input type="password" class="form-control p_lg" id="login-password"
                                            name="login-password" required placeholder="Password">
                                    </div>
                                    <button type="submit" class="b-unstyle educate-btn w-100 mb-24"><span
                                            class="educate-btn__curve"></span>Login</button>
                                </form>
                                <div class="bottom-row">
                                    
                                    <h6>No tienes una cuenta? <a href="form_registro.php" class="color-primary">
                                            Registro</a></h6>
                                    <!--        
                                    <h6><a href="" class="color-primary">Forgot Password?</a></h6>
                                    -->
                                </div>
                            </div>
                            <div class="shapes">
                                <img src="assets/media/shapes/vector-9.png" alt="">
                                <img src="assets/media/shapes/vector-8.png" alt="">
                                <img src="assets/media/shapes/circle-lines-3.png" alt="">
                                <img src="assets/media/shapes/location.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- Login Area End -->
    </div>

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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Contactos</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.png">

    <!-- Core Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="css/responsive.css" rel="stylesheet">

</head>

<body>
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="mosh-preloader"></div>
    </div>

    <!-- ***** Header Area Start ***** -->
    <header class="header_area clearfix">
        <div class="container-fluid h-100">
            <div class="row h-100">
                <!-- Menu Area Start -->
                <div class="col-12 h-100">
                    <div class="menu_area h-100">
                        <nav class="navbar h-100 navbar-expand-lg align-items-center">
                            <!-- Logo -->
                            <a class="navbar-brand" href="index.html"><img src="img/core-img/logo.png" alt="logo"></a>

                            <!--  Area De Menu-->
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mosh-navbar" aria-controls="mosh-navbar" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

                            <div class="collapse navbar-collapse justify-content-end" id="mosh-navbar">
                                <ul class="navbar-nav animated" id="nav">
                                    <li class="nav-item active"><a class="nav-link" href="index.html">Inicio</a></li>
                                    <li class="nav-item"><a class="nav-link" href="about.html">Nosotros</a></li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                            Servicios
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="servicios.html">¿Que ofrecemos?</a>
                                            <a class="dropdown-item" href="#">Logistica Internacional</a>
                                            <a class="dropdown-item" href="#">Negocios Internacionales</a>
                                            <a class="dropdown-item" href="#">Soluciones de Perforación</a>
                                            <a class="dropdown-item" href="repuestos.html">Suministro de repuestos</a>
                                          </div>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="contact.php">Contactos</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Breadcumb Area Start ***** -->
    <div class="mosh-breadcumb-area" style="background-image: url(img/core-img/breadcumb.png);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="bradcumbContent">
                        <h2>Contacto</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contacto</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Breadcumb Area End ***** -->

    <!-- ***** Contact Area Start ***** -->
    <section class="contact-area section_padding_100">
        <div class="container">
            <div class="row">
                <!-- Contact Form Area -->
                <div class="col-12 col-md-8">
                    <div class="contact-form-area">
                                <li class="breadcrumb-item active" aria-current="page"></li>
                        <h2>Ponerse en contacto</h2>
                        <form action="correos.php" method="POST">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <input type="text" name="nombre" class="form-control" id="name" placeholder="Nombre" required>
                                </div>
                                <div class="col-12 col-md-6">
                                    <input type="email" name="email" class="form-control" id="email" placeholder="E-mail" required>
                                </div>
                                <div class="col-12 col-md-6">
                                    <input type="text" name="telefono" class="form-control" id="telefono" placeholder="Telefono" required>
                                </div>                              
                                <div class="col-12">
                                    <input type="text" name="asunto" class="form-control" id="asunto" placeholder="Asunto" required>
                                </div>
                                <div class="col-12">
                                    <textarea name="mensaje" class="form-control" id="mensaje" cols="30" rows="10" placeholder="Mensaje" required></textarea>
                                </div>
                                <button class="btn mosh-btn mt-50" type="submit">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Contact Information -->
                <div class="col-12 col-md-4">
                    <div class="contact-information">
                        <h2>Contacto</h2>
                        <div class="single-contact-info d-flex">
                            <div class="contact-icon mr-15">
                                <img src="img/core-img/map.png" alt="">
                            </div>
                            <p>3ra Calle Poniente,<br> 89 Avenida Norte #34, San Salvador</p>
                        </div>
                        <div class="single-contact-info d-flex">
                            <div class="contact-icon mr-15">
                                <img src="img/core-img/call.png" alt="">
                            </div>
                            <p>Celular: 7987 3382 <br> Oficina: 2201 8650</p>
                        </div>
                        <div class="single-contact-info d-flex">
                            <div class="contact-icon mr-15">
                                <img src="img/core-img/message.png" alt="">
                            </div>
                            <p>ventasgrupoceleritas@gmail.com</p>
                        </div>
                        <div class="contact-social-info mt-50">
                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Contact Area End ***** -->

    <!-- Google Maps -->
    <div class="map-area">


            


    </div>

    <!-- ***** Footer Area Start ***** -->
    <footer class="footer-area clearfix">
        <!-- Top Fotter Area -->
        <div class="top-footer-area section_padding_100_0">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-100">
                            <a href="#" class="mb-50 d-block"><img src="img/core-img/logo.png" alt=""></a>
                            <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellent esque sit amet tellus blandit. Etiam nec odio vestibul.</p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-100">
                            <h5>Fast links</h5>
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Testimonials</a></li>
                                <li><a href="#">Services &amp; Features</a></li>
                                <li><a href="#">Accordions and tabs</a></li>
                                <li><a href="#">Menu ideas</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-100">
                            <h5>Blog</h5>
                            <div class="footer-single--blog-post">
                                <a href="#" class="blog-post-date">
                                    <p>23 September, 2017</p>
                                </a>
                                <a href="#" class="blog-post-title">
                                    <h6>Why we love stock photos</h6>
                                </a>
                            </div>
                            <div class="footer-single--blog-post">
                                <a href="#" class="blog-post-date">
                                    <p>22 September, 2017</p>
                                </a>
                                <a href="#" class="blog-post-title">
                                    <h6>Designin on grid. A few rules. </h6>
                                </a>
                            </div>
                            <div class="footer-single--blog-post">
                                <a href="#" class="blog-post-date">
                                    <p>20 September, 2017</p>
                                </a>
                                <a href="#" class="blog-post-title">
                                    <h6>2017 World Design Congress</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-100">
                            <h5>Contact Info</h5>
                            <div class="footer-single-contact-info d-flex">
                                <div class="contact-icon">
                                    <img src="img/core-img/map.png" alt="">
                                </div>
                                <p>4127/ 5B-C Mislane Road, Gibraltar, UK</p>
                            </div>
                            <div class="footer-single-contact-info d-flex">
                                <div class="contact-icon">
                                    <img src="img/core-img/call.png" alt="">
                                </div>
                                <p>Main: 203-808-8613 <br> Office: 203-808-8648</p>
                            </div>
                            <div class="footer-single-contact-info d-flex">
                                <div class="contact-icon">
                                    <img src="img/core-img/message.png" alt="">
                                </div>
                                <p>office@yourbusiness.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fotter Bottom Area -->
        <div class="footer-bottom-area">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 h-100">
                        <div class="footer-bottom-content h-100 d-md-flex justify-content-between align-items-center">
                            <div class="copyright-text">
                                <p>Copyright ©2020 Grupo Celeritas Internacional</p>
                            </div>
                            <div class="footer-social-info">
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ***** Footer Area End ***** -->

    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Validación De Campos -->
    <script src="js/validación.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
    <!-- Google Maps -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwuyLRa1uKNtbgx6xAJVmWy-zADgegA2s"></script>
    <script src="js/map-active.js"></script>

</body>

</html>
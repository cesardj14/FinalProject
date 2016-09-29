<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
    <title>TioVEN</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="Outdoors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design"/>
    <script type="applisalonion/x-javascript">
         addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }
    </script>
    <link href="{{ asset('css/bootstrap.css') }}" rel='stylesheet' type='text/css'/>
    <!-- Custom Theme files -->
    <link href="{{ asset('css/iconeffects.css') }}" rel='stylesheet' type='text/css'/>
    <link href="css/style.css" rel='stylesheet' type='text/css'/>
    <link rel="stylesheet" href="css/swipebox.css">
    <script src="js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <!--/web-font-->
    <link href='//fonts.googleapis.com/css?family=PT+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Merriweather+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <!--/script-->
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();
                $('html,body').animate({scrollTop: $(this.hash).offset().top}, 900);
            });
        });
    </script>
    <!-- swipe box js -->
    <script src="js/jquery.swipebox.min.js"></script>
    <script type="text/javascript">
        jQuery(function ($) {
            $(".swipebox").swipebox();
        });
    </script>
    <!-- //swipe box js -->
    <!--animate-->
    <link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>

</head>
<body>
<!--start-home-->
<div class="banner" id="home">
    <div class="header-bottom">
        <div class="container">
            <div class="fixed-header">
                <!--logo-->
                <div class="logo">
                    <a href="{{ url('/') }}"><h1>TioVEN</h1></a>
                </div>
                <!--//logo-->
                <div class="top-menu">
                    <span class="menu"> </span>
                    <nav class="link-effect-4" id="link-effect-4">
                        <ul>
                            <li><a data-hover="Nosotros" href="#about" class="scroll">Nosotros</a></li>
                            <li><a data-hover="Galeria" href="#gallery" class="scroll">Galeria</a></li>
                            <li><a data-hover="Paquetes" href="#blogs" class="scroll">Paquetes</a></li>
                            <li><a data-hover="Eventos" href="#services" class="scroll">Eventos</a></li>
                            <li><a data-hover="Noticias" href="#review" class="scroll">Noticias</a></li>
                            <li><a data-hover="Contacto" href="#contact" class="scroll">Contacto</a></li>
                            @if (Auth::guest())
                            <li><a data-hover="Registrarse" href="{{ url('/register') }}">Registrarse</a></li>
                                @else
                            <li>
                                <div class="dropdown">
                                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        {{ Auth::user()->name }}
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1" style="font: black;">
                                        <li><a href="{{ url('/logout') }}"
                                               onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                                Salir
                                            </a>

                                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form></li>

                                    </ul>
                                </div>
                            </li>
                            @endif

                        </ul>
                    </nav>
                </div>
                <!-- script-for-menu -->
                <script>
                    $("span.menu").click(function () {
                        $(".top-menu ul").slideToggle("slow", function () {
                        });
                    });
                </script>
                <!-- script-for-menu -->

                <div class="clearfix"></div>
                <script>
                    $(document).ready(function () {
                        var navoffeset = $(".header-bottom").offset().top;
                        $(window).scroll(function () {
                            var scrollpos = $(window).scrollTop();
                            if (scrollpos >= navoffeset) {
                                $(".header-bottom").addClass("fixed");
                            } else {
                                $(".header-bottom").removeClass("fixed");
                            }
                        });

                    });
                </script>
            </div>
        </div>
    </div>


    <div class="down"><a class="scroll" href="#touch"><img src="images/down.png" alt=""></a></div>
</div>
<!-- about-->
<div class="about" id="about">
    <div class="container">
        <div class="col-md-7 about-left">
            <h3 class="tittle">Viajes TioVEN</h3>
            <p class="agile">30 años trabajando para ofrecer servicios de alta calidad técnica y humana, en las áreas de
                Turismo, Recreación, Cultura, Deporte y Entretenimiento. En ese periodo, han sido numerosas las personas
                y organizaciones que han confiado en los servicios que prestamos, en nuestro personal y en la
                profesionalidad de nuestra empresa; por ello el compromiso que mantenemos con la calidad, la excelencia
                y el buen servicio, brindando los más novedosos programas que permiten satisfacer las necesidades y
                gustos de nuestros distinguidos clientes. Se fundó en Caracas, inicialmente con el objetivo de
                promocionar en el mercado escolar con diferentes destinos turísticos, recreativos y culturales,
                desarrollando posteriormente una intensa actividad en el área de Turismo, Eventos Corporativos,
                Culturales y Deportivos, somos pionera en la Organización y Desarrollo de planes Vacacionales,
                Campamentos, Programas de recreación para jubilados y tercera edad entre otros.
                Nuestra organización se encuentra ubicada en Caracas, Venezuela y cuenta con el Recurso Humano y
                Logístico para realizar sus actividades en el ámbito nacional e internacional. A lo largo de las TRES
                DÉCADAS de trayectoria, TIO VEN ha logrado conformar una sólida organización con un equipo de excelentes
                profesionales, creando empleos directos e indirectos y actividades conexas al servicio liderando el
                mercado nacional de Planes Vacacionales y logrando una importante presencia en el mercado turístico
                infantil, juvenil y adulto nacional, así como en la Organización y Desarrollo de Eventos Corporativos,
                familiares y Particulares.
                .</p>
            <ul class="social wow slideInDown" data-wow-duration="1s" data-wow-delay=".3s">
                <li><a href="#" class="tw"></a></li>
                <li><a href="#" class="fb"> </a></li>
                <div class="clearfix"></div>
            </ul>
        </div>
        <div class="col-md-5 about-right">
            <div class="about-right-part1">

                <div class="col-md-1 num">
                    <h5>01</h5>
                </div>
                <div class="col-md-11 about-right-text">
                    <h4>Mision</h4>
                    <p>Incentivar, promover, fomentar y desarrollar Turismo Nacional e Internacional, mostrando al mundo
                        nuestras maravillas, mediante una importante distribución en Venezuela y El Mundo.
                        TIO VEN llega a miles de usuarios a través de sus múltiples servicios turísticos , deportivos,
                        recreativos y culturales, transformándose en la primera empresa del sector Turismo que ofrece a
                        sus clientes la calidad, seguridad y satisfacción de gustos y necesidades a lo largo y ancho del
                        territorio nacional.
                    </p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="about-right-part2">
                <div class="col-md-1 num">
                    <h5>02</h5>
                </div>
                <div class="col-md-11 about-right-text">
                    <h4>Vision</h4>
                    <p>Ser una empresa multiservicios de referencia pensada por Venezolanos (as) para Venezuela y El
                        Mundo, orientada para fomentar y fortalecer el:
                    <ul>
                        <li>Turismo</li>
                        <li>Deporte</li>
                        <li>Recreacion</li>
                        <li>Cultura</li>
                    </ul>
                    Mediante el desarrollo y la difusión de innovadores programas, productos y servicios, orientados a
                    la elevación de la calidad de vida del venezolano, exaltando y concientizando los valores y
                    tradiciones autóctonas del país.
                    </p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="about-right-part3">
                <div class="col-md-1 num">
                    <h5>03</h5>
                </div>
                <div class="col-md-11 about-right-text">
                    <h4>Objetivo</h4>
                    <p>El éxito de la empresa se basa en la planificación, promoción y desarrollo de excelentes
                        productos y servicios turísticos, recreativos, culturales y deportivos a nivel nacional e
                        internacional, donde la calidad, flexibilización, sensibilización por los aspectos
                        medioambientales, la individualización y satisfacción de gustos y necesidades adquieren mayor
                        importante; apreciándose así que competitividad de la empresa no reside solo en el factor
                        precio, sino en la innovación, creación y desarrollo de nuevos productos, para conseguir la
                        plena satisfacción del cliente con el fin de fidelizarlo.</p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- //about-->


<!-- about-bottom-->
<div class="about-bottom">
    <div class="col-md-6 about-btm-left">
        <h3 class="tittle">Algunos videos de nosotros</h3>
        <p>Integer eu dui quis purus mattis maximus. Nunc bibendum dignissim libero, at placerat lectus fringilla nec.
            Morbi ut risus sed nulla elementum ultrices venenatis sit amet nisl.</p>
        <a href="#" data-toggle="modal" data-target="#modalvideo" class="hvr-bounce-to-bottom">PLAY NOW</a>
    </div>
    <div class="col-md-6 video" id="video">
        <a href="#" data-toggle="modal" data-target="#modalvideo"> <span class="glyphicon glyphicon-play"
                                                                         aria-hidden="true"></span> </a>
        <div class="modal fade features-modal" id="modalvideo" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/MeT0txRfdug" frameborder="0"
                                allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="clearfix"></div>
</div>
<!-- //about-bottom-->
<!--Gallery-->
<div class="gallery" id="gallery">
    <div class="container">
        <h3 class="tittle">Galería de imagenes</h3>
        <div class="gallery-grids">
            <div class="col-md-8 col-sm-8 ggd baner-top big wow fadeInRight animated" data-wow-delay=".5s">
                <a href="images/my1.jpg" class="b-link-stripe b-animate-go  swipebox">
                    <div class="gal-spin-effect vertical ">
                        <img src="images/my1.jpg" alt=" "/>
                        <div class="gal-text-box">
                            <div class="info-gal-con">
                                <h4>Los Roques</h4>
                                <span class="separator"></span>
                                <p>Archipielago de Los Roques situado al norte de Venezuela.</p>
                                <span class="separator"></span>

                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-sm-4 ggd baner-top small wow fadeInLeft animated" data-wow-delay=".5s">
                <a href="images/my2.jpg" class="b-link-stripe b-animate-go  swipebox">
                    <div class="gal-spin-effect vertical ">
                        <img src="images/my2.jpg" alt=" "/>
                        <div class="gal-text-box">
                            <div class="info-gal-con">
                                <h4>El Salto Angel</h4>
                                <span class="separator"></span>
                                <p>Cascada mas alta del mundo situada al sur de Venezuela.</p>
                                <span class="separator"></span>

                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-sm-4 ggd baner-top small ban-mar wow fadeInUp animated" data-wow-delay=".5s">
                <a href="images/my4.jpg" class="b-link-stripe b-animate-go  swipebox">
                    <div class="gal-spin-effect vertical ">
                        <img src="images/my4.jpg" alt=" "/>
                        <div class="gal-text-box">
                            <div class="info-gal-con">
                                <h4>Ciudad de Colonia</h4>
                                <span class="separator"></span>
                                <p>Situado al oeste de Alemania.</p>
                                <span class="separator"></span>

                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-8 col-sm-8 ggd baner-top big ban-mar wow fadeInDown animated" data-wow-delay=".5s">
                <a href="images/my3.jpg" class="b-link-stripe b-animate-go  swipebox">
                    <div class="gal-spin-effect vertical ">
                        <img src="images/my3.jpg" alt=" "/>
                        <div class="gal-text-box">
                            <div class="info-gal-con">
                                <h4>Hard Rock Cafe</h4>
                                <span class="separator"></span>
                                <p>Hard Rock Cafe Punta Cana.</p>
                                <span class="separator"></span>

                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-sm-4 ggd baner-top three wow fadeInLeft animated" data-wow-delay=".5s">
                <a href="images/my5.jpg" class="b-link-stripe b-animate-go  swipebox">
                    <div class="gal-spin-effect vertical ">
                        <img src="images/my5.jpg" alt=" "/>
                        <div class="gal-text-box">
                            <div class="info-gal-con">
                                <h4>Santorini</h4>
                                <span class="separator"></span>
                                <p>Isla Griega.</p>
                                <span class="separator"></span>

                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-sm-4 ggd baner-top three wow fadeInLeft animated" data-wow-delay=".5s">
                <a href="images/my6.jpg" class="b-link-stripe b-animate-go  swipebox">
                    <div class="gal-spin-effect vertical ">
                        <img src="images/my6.jpg" alt=" "/>
                        <div class="gal-text-box">
                            <div class="info-gal-con">
                                <h4>Egipto</h4>
                                <span class="separator"></span>
                                <p>Conoce los desiertos del norte de Africa.</p>
                                <span class="separator"></span>

                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-sm-4 ggd baner-top three thre wow fadeInLeft animated" data-wow-delay=".5s">
                <a href="images/my7.jpg" class="b-link-stripe b-animate-go  swipebox">
                    <div class="gal-spin-effect vertical ">
                        <img src="images/my7.jpg" alt=" "/>
                        <div class="gal-text-box">
                            <div class="info-gal-con">
                                <h4>Rio de Janeiro</h4>
                                <span class="separator"></span>
                                <p>Vive el carnaval en esta hermosa ciudad.</p>
                                <span class="separator"></span>

                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- //gallery -->
<!--Blogs -->
<div class="blogs" id="blogs">
    <div class="container">
        <h3 class="tittle"><a href="{{ url('/paquetes') }}">Paquetes</a></h3>
        <p class="wel-text wow fadeInDown" data-wow-duration=".8s" data-wow-delay=".4s">Conoce nuestra variedad de
            paquetes que disponemos para nuestros distinguidos miembros.</p>
        <div class="inst-grids">
            <a href="{{ url('/paquetesn') }}">
                <div class="col-md-6 blog-gd-w3ls">
                    <img src="images/my2.jpg">
                    <div class="date-w3">
                        <h4>Paquetes Nacionales</h4>
                    </div>
                    <div class="blog-description-w3agile">
                        <h5 style="text-shadow: black 5px 5px 5px;">Conoce nuestros paquetes nacionales</h5>
                    </div>
                </div>
            </a>
            <a href="{{ url('/paquetesi') }}">
                <div class="col-md-6 blog-gd-w3ls">
                    <img src="images/b2.jpg">
                    <div class="date-w3">
                        <h4>Paquetes Internacionales</h4>
                    </div>
                    <div class="blog-description-w3agile">
                        <h5 style="text-shadow: black 5px 5px 5px;">Conoce nuestros paquetes internacionales</h5>
                    </div>
                </div>
            </a>

            <div class="clearfix"></div>
        </div>

    </div>
</div>
<!--//Blogs -->


<!-- services -->
<div class="service" id="services">
    <div class="container">
        <h3 class="tittle"><a data-hover="Eventos" href="{{ url('/eventos') }}">Eventos</a></h3>
        <div class="inst-grids">
            <div class="col-md-6 services-gd sgd1 text-center wow slideInLeft" data-wow-duration="1s"
                 data-wow-delay=".3s">
                <div class=" col-md-2 hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
                    <a href="#" class="hi-icon"><img src="images/serve1.png"></a>
                </div>
                <div class="col-md-10 serv-text">
                    <h4>Conferencias</h4>
                    <p>Conferencias de distintos temas a lo largo del mundo.</p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-6 services-gd sgd2 text-center wow slideInLeft" data-wow-duration="1s"
                 data-wow-delay=".3s">
                <div class=" col-md-2 hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
                    <a href="#" class="hi-icon"><img src="images/serve2.png"></a>
                </div>
                <div class="col-md-10 serv-text">
                    <h4>Planes Vacacionales</h4>
                    <p>Conoce nuestros planes vacacionales en Venezuela y el resto del mundo.</p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-6 services-gd text-center wow slideInLeft" data-wow-duration="1s" data-wow-delay=".3s">
                <div class=" col-md-2 hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
                    <a href="#" class="hi-icon"><img src="images/serve3.png"></a>
                </div>
                <div class="col-md-10 serv-text">
                    <h4>Conciertos</h4>
                    <p>Conoce mas informacion de los ultimos conciertos.</p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-6 services-gd services-gd4 text-center wow slideInLeft" data-wow-duration="1s"
                 data-wow-delay=".3s">
                <div class=" col-md-2 hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
                    <a href="#" class="hi-icon"><img src="images/serve4.png"></a>
                </div>
                <div class="col-md-10 serv-text">
                    <h4>Fiestas</h4>
                    <p>Fiestas...</p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>

    </div>
</div>
<!-- //services-->


<!--/reviews-->
<div id="review" class="reviews">

    <div class="test-monials">
        <h3 class="tittle"><a href="{{ url('/news') }}">Noticias</a></h3>
        <!--//screen-gallery-->
        <div class="sreen-gallery-cursual">
            <!-- required-js-files-->
            <link href="css/owl.carousel.css" rel="stylesheet">
            <script src="js/owl.carousel.js"></script>
            <script>
                $(document).ready(function () {
                    $("#owl-demo").owlCarousel({
                        items: 1,
                        lazyLoad: true,
                        autoPlay: false,
                        navigation: false,
                        navigationText: false,
                        pagination: true,
                    });
                });
            </script>
            <!--//required-js-files-->
            <div id="owl-demo" class="owl-carousel">
                <div class="item-owl">
                    <div class="test-review">
                        <div class=" col-md-8 test-text">
                            <p class="wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".4s"><img
                                        src="images/left-quotes.png" alt=""> Consetetur sadipscing elitr, sed diam
                                nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam
                                voluptua. <img src="images/right-quotes.png" alt=""></p>
                            <h5 class="wow bounceIn" data-wow-duration=".8s" data-wow-delay=".2s">Martin H. Joseph</h5>
                        </div>
                        <div class="col-md-4 test-video">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/MeT0txRfdug"
                                    frameborder="0" allowfullscreen></iframe>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="item-owl">
                    <div class="test-review">
                        <div class=" col-md-8 test-text">
                            <p class="wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".4s"><img
                                        src="images/left-quotes.png" alt="">Polite sadipscing elitr, sed diam nonumy
                                eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.<img
                                        src="images/right-quotes.png" alt=""></p>
                            <h5 class="wow bounceIn" data-wow-duration=".8s" data-wow-delay=".2s">Dennis Pal,</h5>
                        </div>
                        <div class="col-md-4 test-video">
                            <iframe src="https://player.vimeo.com/video/25658743" frameborder="0" webkitallowfullscreen
                                    mozallowfullscreen allowfullscreen></iframe>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="item-owl">
                    <div class="test-review">
                        <div class=" col-md-8 test-text">
                            <p class="wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".4s"><img
                                        src="images/left-quotes.png" alt=""> Consetetur sadipscing elitr, sed diam
                                nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam
                                voluptua. <img src="images/right-quotes.png" alt=""></p>
                            <h5 class="wow bounceIn" data-wow-duration=".8s" data-wow-delay=".2s">Martin H.Wilson</h5>
                        </div>
                        <div class="col-md-4 test-video">
                            <iframe src="https://player.vimeo.com/video/43338103?color=ebebeb&title=0&byline=0&portrait=0"
                                    frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!--//screen-gallery-->
        </div>
    </div>

</div>
<!--//reviews-->


<!--contact-->
<div class="section-contact" id="contact">
    <div class="container">
        <h3 class="tittle">Contacto</h3>
        <form action="#" method="post">
            <input type="text" name="Name" placeholder="Nombre" required="">
            <input type="text" name="Last Name" placeholder="Apellido" required="">
            <input type="tel" name="Telephone" placeholder="Telefono" required="">
            <input class="email" type="text" name="Email" placeholder="Email" required="">
            <input class="text" type="text" name="Motive" placeholder="Motivo" required="">
            <textarea placeholder="Mensaje" name="Message" required=""></textarea>
            <p class="form-submit wow shake" data-wow-duration="1s" data-wow-delay=".3s">
                <input name="submit" type="submit" id="submit" value="SEND">
            </p>
        </form>
    </div>
</div>
<!--//contact-->

<!--map-->
<div class="touch" id="touch">
    <div class="container">
        <h3 class="tittle">Ubiquenos</h3>
        <div class="col-md-9 touch-left">
            <div class="map wow fadeInDown" data-wow-duration=".8s" data-wow-delay=".5s">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3923.219432355452!2d-66.82893380203676!3d10.483360670232297!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x981a18441bdf60be!2sDiario+El+Nacional!5e0!3m2!1sen!2s!4v1474297775970"
                        width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-md-3 touch-right-w3l">
            <div class="address">
                <div class="col-xs-3 contact-grdl">
                    <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
                </div>
                <div class="col-xs-9 contact-grdr">
                    <ul>
                        <li>Avenida Turín, Transversal 3, Avienda Turin, Distrito Capital,</li>
                        <li>Venezuela.</li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="call-agileinfo">
                <div class="col-xs-3 contact-grdl">
                    <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
                </div>
                <div class="col-xs-9 contact-grdr">
                    <ul>
                        <li>+3402 890 679</li>
                        <li>+5356 890 679</li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>

            <div class="mail-w3gile">
                <div class="col-xs-3 contact-grdl">
                    <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                </div>
                <div class="col-xs-9 contact-grdr">
                    <ul>
                        <li><a href="mailto:info@example.com">info@example.com</a></li>
                        <li><a href="mailto:info@example.com">info2@example.com</a></li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!--//map-->


<!--footer-->
<div class="footer text-center">
    <div class="container">
        <p class="copy-right wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">&copy; 2016 TioVEN . Todos los
            derechos reservados | Design by <a href="http://w3layouts.com">W3layouts</a></p>
        <ul class="social wow slideInDown" data-wow-duration="1s" data-wow-delay=".3s">
            <li><a href="#" class="fb"> </a></li>
            <li><a href="#" class="tw"></a></li>
            <div class="clearfix"></div>
        </ul>
    </div>
</div>


<!--start-smooth-scrolling-->
<script type="text/javascript">
    $(document).ready(function () {
        /*
         var defaults = {
         containerID: 'toTop', // fading element id
         containerHoverID: 'toTopHover', // fading element hover id
         scrollSpeed: 1200,
         easingType: 'linear'
         };
         */

        $().UItoTop({easingType: 'easeOutQuart'});

    });
</script>
<!--end-smooth-scrolling-->
<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover"
                                                                         style="opacity: 1;"> </span></a>
<script src="js/bootstrap.min.js"></script>


</body>
</html>
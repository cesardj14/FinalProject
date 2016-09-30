<!DOCTYPE HTML>
<html>
<head>
    <title>TioVen | Show</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   p <meta name="keywords" content="Outdoors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script type="applisalonion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <!-- Custom Theme files -->
    <link href="css/iconeffects.css" rel='stylesheet' type='text/css' />
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="css/swipebox.css">
    <script src="js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <!--/web-font-->
    <link href='//fonts.googleapis.com/css?family=PT+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Merriweather+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <!--/script-->
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},900);
            });
        });
    </script>
    <!--animate-->
    <link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <!--//animate-->

</head>
<body>
<!--start-home-->
<div class="banner two" id="home">
    <div class="header-bottom">
        <div class="container">
            <div class="fixed-header">
                <!--logo-->
                <div class="logo">
                    <div class="logo">
                        <a href="#"><h1><span>Vista.</span></h1></a>
                    </div>
                </div>
                <!--//logo-->
                <div class="top-menu">
                    <span class="menu"> </span>
                    <nav class="link-effect-4" id="link-effect-4">
                        <ul>
                            <li class="active"><a data-hover="Home" href="{{ url('/')  }}">Home</a></li>
                            @if (Auth::guest())
                                <li><a data-hover="Registrarse" href="{{ url('/register') }}">Registrarse</a></li>
                                <li><a data-hover="Login" href="{{ url('/login') }}">Login</a></li>
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
                        <!-- script-for-menu -->
                            <script>
                                $("span.menu").click(function(){
                                    $(".top-menu ul").slideToggle("slow" , function(){
                                    });
                                });
                            </script>
                            <!-- script-for-menu -->

                            <div class="clearfix"></div>
                            <script>
                                $(document).ready(function() {
                                    var navoffeset=$(".header-bottom").offset().top;
                                    $(window).scroll(function(){
                                        var scrollpos=$(window).scrollTop();
                                        if(scrollpos >=navoffeset){
                                            $(".header-bottom").addClass("fixed");
                                        }else{
                                            $(".header-bottom").removeClass("fixed");
                                        }
                                    });

                                });
                            </script>
                </div>
            </div>
        </div>
    </div>
    <div class="section-contact" id="contact">
        <div class="container">
            <h3 class="tittle">Producto</h3>
            <form action="#" method="post">
                <img src="images/my2.jpg" alt="">
                <input type="text" name="Name" placeholder="Nombre del evento" required="">
                <input type="text" name="Tipo" placeholder="Tipo de evento" required="">
                <textarea placeholder="Descripcion" name="Message" required=""></textarea>
                <input type="text" name="Price" placeholder="Precio por persona" required="">
                <input type="text" name="Fechai" placeholder="Fecha de Inicio" required="">
                <input type="text" name="Fechaf" placeholder="Fecha Final" required="">
                <input type="text" name="Status" placeholder="Status del evento" required="">


                <input name="submit" type="submit" id="submit" value="SEND">
                </p>
            </form>
        </div>
    </div>





    <div class="footer text-center">
        <div class="container">
            <p class="copy-right wow fadeInUp"  data-wow-duration="1s" data-wow-delay=".3s">&copy; 2016 Outdoors . All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
            <ul class="social wow slideInDown" data-wow-duration="1s" data-wow-delay=".3s">
                <li><a href="#" class="tw"></a></li>
                <li><a href="#" class="fb"> </a></li>

                <div class="clearfix"></div>
            </ul>
        </div>
    </div>
    <!--start-smooth-scrolling-->
    <script type="text/javascript">
        $(document).ready(function() {
            /*
             var defaults = {
             containerID: 'toTop', // fading element id
             containerHoverID: 'toTopHover', // fading element hover id
             scrollSpeed: 1200,
             easingType: 'linear'
             };
             */

            $().UItoTop({ easingType: 'easeOutQuart' });

        });
    </script>
    <!--end-smooth-scrolling-->
    <a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
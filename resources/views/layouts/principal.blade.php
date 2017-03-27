<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Ping Pong Contact</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        {!!Html::style('vendor/bootstrap/css/bootstrap.min.css')!!}
        {!!Html::style('vendor/font-awesome/css/font-awesome.min.css')!!}
        {!!Html::style('https://fonts.googleapis.com/css?family=Montserrat:400,700')!!}
        {!!Html::style('https://fonts.googleapis.com/css?family=Kaushan+Script')!!}
        {!!Html::style('https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic')!!}
        {!!Html::style('https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700')!!}
        {!!Html::style('css/agency.min.css')!!}
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
        <!--<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
        <link type="text/css" rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
        <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
        <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script">
        <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic">
        <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700">
        <link rel="stylesheet" href="css/agency.min.css">-->
        <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link rel="icon" href="img/favicon.png">
    </head>
    <body>
        <nav class="navbar navbar-default navbar-custom navbar-fixed-top affix" id="mainNav">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header page-scroll">
                    <button data-target="#bs-example-navbar-collapse-1" data-toggle="collapse" class="navbar-toggle" type="button">
                        <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                    </button>
                    <!--<a href="#page-top" class="navbar-brand page-scroll">PING PONG</a>-->
                    <a href="/">
                        <img src="img/pingpong.png" style="margin-left: 0px;">
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="hidden">
                            <a href="#page-top"></a>
                        </li>
                        <li class="">
                            <a href="/" class="page-scroll">Home</a>
                        </li>
                        <li class="">
                            <a href="/product" class="page-scroll">Products</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
        @yield('content_ingles')
        @yield('content_español')
        <footer>
            <div class="container">
                    <!--<div class="col-lg-4">

                    </div>-->
                    <div class="col-lg-6">
                        <ul class="list-inline" style="text-align: center">
                            <div>
                                <h2 class="section-heading" style="text-align: center"> Follow us </h2>
                            </div>
                            <li style="text-align: center">
                                <a rel="nofollow" target="_blank" href="https://es-la.facebook.com/pingponginnovation/" style="text-align: center">
                                    <i class="fa fa-facebook-square fa-4x"></i>
                                </a>
                            </li>
                            <li class="footer-menu-divider" style="text-align: center">&sdot;</li>
                            <li>
                                <a rel="nofollow" target="_blank" href="https://twitter.com/pingpong_innova" style="text-align: center">
                                    <i class="fa fa-twitter fa-4x"></i>
                                </a>
                            </li>
                            <li class="footer-menu-divider">&sdot;</li>
                            <li>
                                <a rel="nofollow" target="_blank" href="https://plus.google.com/105026202932119515149" style="text-align: center">
                                    <i class="fa fa-google-plus fa-4x"></i>
                                </a>
                            </li>
                        </ul>
                        <p class="copyright text-muted small" style="text-align: center">Copyright &copy; PingPong</p>
                        <p class="copyright text-muted small" style="text-align: center">All Rights Reserved</p>
                        <p class="copyright text-muted small" style="text-align: center">2017</p>
                    </div>
                    <div class="col-lg-6">
                        <ul class="list-inline" style="text-align: center">
                            <div>
                                <h2 class="section-heading" style="text-align: center">Contact</h2>
                            </div>
                            <li style="text-align: center">
                                <p class="lead">    Tacubaya 1726. Col. Jardín Español</p>
                            </li>
                            <br>
                            <li style="text-align: center">
                                <p class="lead">Monterrey, N.L. C.P. 64820</p>
                            </li>
                            <br>
                            <li style="text-align: center">
                                <p class="lead"><a href="mailto: info@pingponginnovation.com">info@pingponginnovation.com</a></p>
                            </li>
                            <br>
                            <li style="text-align: center">
                                <p class="lead">Tel: + 52- 81-84865238</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>
<script>
    //Desabilitar Google Maps
    //Desabilitar desplazamiento del mapa con el mouse
    var onMapMouseleaveHandler = function (event) {
        var that = $(this);
        that.on('click', onMapMouseleaveHandler);
        that.off('mouseleave', onMapMouseleaveHandler);
        that.find('iframe').css("pointer-events", "none");
    }

    var onMapClickHandler = function (event) {
        var that = $(this);
        that.off('click', onMapClickHandler);
        that.find('iframe').css("pointer-events", "auto");
        that.on('mouseleave', onMapClickHandler);
    }
    $('.map').on('click', onMapClickHandler);
</script>

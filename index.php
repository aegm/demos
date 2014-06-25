<html lang="en">
    <head>
        <title>Demo</title>
        <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <!--Estilo del Slider-->
        <link rel="stylesheet" type="text/css" href="css/revolucion_settings">
    </head>
    <body>
        <div class="wrapper">
            <header class="navbar-fixed-top" >
                <div id="main-header">
                    <div class="container">
                        <nav class="navbar navbar-default">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                </button>
                                <a href="" class="navbar-brand">
                                    <!--img src=""-->
                                    Demo
                                </a>
                            </div>
                            <div class="collapse navbar-collapse">
                                <ul class="nav navbar-nav pull-right">
                                    <li class=""><a class="active" href="">Home</a></li>
                                    <li><a href="">Service</a></li>
                                    <li><a href="">About</a></li>
                                    <li><a href="">Works</a></li>
                                    <li><a href="">Contacs</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    
                </div>
                
            </header>
            <section>
                <div class="rev-slider-full responsive">
                    <div class="banner">
                        <ul>
                            <!-- THE 1 SLIDE -->
                            <li data-transition="turnoff" data-slotamount="1" data-masterspeed="300" >
                                <img src="img/slides/bg1.jpg" >
                                <div class="caption large_text fade"
                                    data-x="509"
                                    data-y="290"
                                    data-speed="300"
                                    data-start="800"
                                data-easing="easeOutExpo"  ></div>
                                <div class="caption very_large_black_text randomrotate"
                                    data-x="641"
                                    data-y="95"
                                    data-speed="300"
                                    data-start="1100"
                                data-easing="easeOutExpo"  >SLIDER</div>
                                <div class="caption large_black_text randomrotate"
                                    data-x="642"
                                    data-y="161"
                                    data-speed="300"
                                    data-start="1400"
                                data-easing="easeOutExpo"  >REVOLUTION</div>
                                <div class="caption bold_red_text randomrotate"
                                    data-x="645"
                                    data-y="201"
                                    data-speed="300"
                                    data-start="1700"
                                data-easing="easeOutExpo"  >GOT FULLSCREEN VIDEO</div>
                                <div class="caption sfb"
                                    data-x="640"
                                    data-y="223"
                                    data-speed="300"
                                    data-start="2000"
                                data-easing="easeOutBack"  ><img src="images/slides/video.jpg" alt="Image 7"></div>
                                <div class="caption sft"
                                    data-x="639"
                                    data-y="383"
                                    data-speed="300"
                                    data-start="2300"
                                data-easing="easeOutExpo"  data-linktoslide="4" ><img src="images/slides/videobutton.jpg" alt="Image 8"></div>
                            </li>
                            <!-- THE 2 SLIDE -->
                            <li data-transition="slideleft" data-slotamount="1" data-masterspeed="300" data-thumb="images/thumbs/thumb5.jpg">
                                <img src="img/slides/bg2.jpg" >
                                <div class="caption large_text sft"
                                    data-x="50"
                                    data-y="44"
                                    data-speed="300"
                                    data-start="800"
                                data-easing="easeOutExpo"  >TOUCH ENABLED</div>
                                <div class="caption medium_text sfl"
                                    data-x="79"
                                    data-y="82"
                                    data-speed="300"
                                    data-start="1100"
                                data-easing="easeOutExpo"  >AND</div>
                                <div class="caption large_text sfr"
                                    data-x="128"
                                    data-y="78"
                                    data-speed="300"
                                    data-start="1100"
                                data-easing="easeOutExpo"  ><span style="color: #ffc600;">RESPONSIVE</span></div>
                                <div class="caption lfl"
                                    data-x="53"
                                    data-y="192"
                                    data-speed="300"
                                    data-start="1400"
                                data-easing="easeOutExpo"  ><img src="images/slides/imac.png" alt="Image 4"></div>
                                <div class="caption lfl"
                                    data-x="253"
                                    data-y="282"
                                    data-speed="300"
                                    data-start="1500"
                                data-easing="easeOutExpo"  ><img src="images/slides/ipad.png" alt="Image 5"></div>
                                <div class="caption lfl"
                                    data-x="322"
                                    data-y="313"
                                    data-speed="300"
                                    data-start="1600"
                                data-easing="easeOutExpo"  ><img src="images/slides/iphone.png" alt="Image 6"></div>
                            </li>
                        </ul>
                        <!-- CORRED -->
                        <div class="tp-bannertimer"></div>
                    </div>
                </div>
            </section>
            <section>
                <section class="largeQuote pb40 pt40">
                    <div class="container">
                        <div class="row">
                            <div class="span12 text-center">
                                <h1>Our Serive</h1>
                                <h2 class="subTitle">Lorem Ipsum, ipmsum</h2>
                            </div>
                        </div>
                    </div>
                </section>
            </section>
        </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
        <!--Agregamos el plugin para las sliders-->
        <script type="text/javascript" src="js/jquery.themepunch.plugins.min.js"></script>
        <script type="text/javascript" src="js/jquery.themepunch.revolution.js"></script>
        <script type="text/javascript" src="js/main.js"></script>
    </body>
</html>
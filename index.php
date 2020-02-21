<?php
    //importamos el head , con los css 
    include('head.php');
?>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Add your site or application content here -->
    <!-- Preloader Start Here 
    <div id="preloader"></div>-->
    <!-- Preloader End Here -->
    <!-- Main Body Area Start Here -->
    <div id="wrapper">
        <?php
            //importamos el header y el menu 
            include('menu.php');
        ?>
    
    <!-- Slider 1 Area Start Here -->
    <div class="slider1-area ">
        <div class="bend niceties preview-1">
            <div id="ensign-nivoslider-3" class="slides">
                <img src="img/slider/lab1.jpg" alt="Colegio Químico y Farmacéutico de Honduras" title="#slider-direction-3" />
                <img src="img/slider/lab2.jpg" alt="Colegio Químico y Farmacéutico de Honduras" title="#slider-direction-1" />
                <img src="img/slider/lab3.jpg" alt="Colegio Químico y Farmacéutico de Honduras" title="#slider-direction-2" />                   
                <img src="img/slider/lab4.jpg" alt="Colegio Químico y Farmacéutico de Honduras" title="#slider-direction-3" />
            </div>
            <div id="slider-direction-1" class="t-cn slider-direction">
                <div class="slider-content s-tb slide-1">
                    <div class="title-container s-tb-c">
                        
                    </div>
                </div>
            </div>
            <div id="slider-direction-2" class="t-cn slider-direction">
                <div class="slider-content s-tb slide-2">
                    <div class="title-container s-tb-c">
                        
                    </div>
                </div>
            </div>
            <div id="slider-direction-3" class="t-cn slider-direction">
                <div class="slider-content s-tb slide-3">
                    <div class="title-container s-tb-c">
                        
                    </div>
                </div>
            </div>
            <div id="slider-direction-4" class="t-cn slider-direction">
                <div class="slider-content s-tb slide-4">
                    <div class="title-container s-tb-c">
                        
                    </div>
                </div>
            </div>
            <div id="slider-direction-5" class="t-cn slider-direction">
                <div class="slider-content s-tb slide-5">
                    <div class="title-container s-tb-c">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Slider 1 Area End Here -->

    <!-- About 2 Area Start Here -->
    <div class="about2-area">
            <div class="container">
                <h1 class="about-title">Bienvenido al Colegio de Químico Farcéuticos de Honduras</h1>
                <p class="about-sub-title">Trabajando por Honduras desde 1963</p>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 wow fadeIn" data-wow-duration="2s" data-wow-delay=".1s">
                        <div class="service-box2">
                            <div class="service-box-icon">
                                <a href="laboratorio.php"><i class="fa fa-flask" aria-hidden="true"></i></a>
                            </div>
                            <h3><a href="laboratorio.php">Laboratorio de Especialidades Farmacéuticas</a></h3>
                            <p>Conoce todo sobre nuestro laboratorio de especialidades...</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 wow fadeIn" data-wow-duration="2s" data-wow-delay=".4s">
                        <div class="service-box2">
                            <div class="service-box-icon">
                                <a href="instalaciones.php"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </div>
                            <h3><a href="instalaciones.php">Galería de Nuestras Instalaciones</a></h3>
                            <p>Visita nuestra galería para ue conozcas nuestras instalaciones</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 wow fadeIn" data-wow-duration="2s" data-wow-delay=".7s">
                        <div class="service-box2">
                            <div class="service-box-icon">
                                <a href="colegiacion.php"><i class="fa fa-edit" aria-hidden="true"></i></a>
                            </div>
                            <h3><a href="colegiacion.php">Proceso de Colegiación</a></h3>
                            <p>Conoce todos los requisitos y pasos para la colegiación.</p>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <!-- About 2 Area End Here -->

       <!-- News and Event Area Start Here -->
       <div class="news-event-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 news-inner-area">
                        <h2 class="title-default-left">Últimos Eventos</h2>
                        <ul class="news-wrapper">
                            <li>
                                <div class="news-img-holder">
                                    <a href="galeria_cena2019.php"><img src="img/cena2019/2.jpg" class="img-responsive" style="width:90%"></a>
                                </div>
                                <div class="news-content-holder">
                                    <h3><a href="galeria_cena2019.php">Cena Navideña 2019</a></h3>
                                    <div class="post-date">14 Diciembre, 2019</div>
                                    <p>En las instalaciones del salón del Colegio en colonia Lara.</p>
                                </div>
                            </li>
                            
                            <li>
                                <div class="news-img-holder">
                                    <a href="#"><img src="img/news/3.jpg" class="img-responsive" alt="news"></a>
                                </div>
                                <div class="news-content-holder">
                                    <h3><a href="single-news.html">Almuerzo para Jubilados</a></h3>
                                    <div class="post-date">7 de Diciembre, 2019</div>
                                    <p>Celebración por parte de la Junta Administradora del Fondo de Auxilio Mutuo.</p>
                                </div>
                            </li>

                            <li>
                                <div class="news-img-holder">
                                    <a href="galeria_certificacion.php"><img src="img/certificacion/4.jpg" class="img-responsive" style="width:90%"></a>
                                </div>
                                <div class="news-content-holder">
                                    <h3><a href="galeria_certificacion.php">Ceremonia de Acreditación </a></h3>
                                    <div class="post-date">19 de Noviembre, 2019</div>
                                    <p>El Organismo Hondureño de  Acreditación (OHA)  hizo entrega del Certificado de Acreditación al Laboratorio de Especialidades </p>
                                </div>
                            </li>
                        </ul>
                       <!--  <div class="news-btn-holder">
                            <a href="#" class="view-all-accent-btn">View All</a>
                        </div> -->
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 event-inner-area">
                        <h2 class="title-default-left">Próximos Eventos</h2>
                        <ul class="event-wrapper">
                            <li class="wow bounceInUp" data-wow-duration="2s" data-wow-delay=".1s">
                                <div class="event-calender-wrapper">
                                    <div class="event-calender-holder">
                                        <h3>26</h3>
                                        <p>Ene</p>
                                        <span>2020</span>
                                    </div>
                                </div>
                                <div class="event-content-holder">
                                    <h3><a href="single-event.html">Juramentación de nuevos colegiados </a></h3>
                                    <p>Pellentese turpis dignissim amet area ducation process facilitating Knowledge. Pellentese turpis dignissim amet area ducation process facilitating Knowledge. Pellentese turpis dignissim amet area ducation.</p>
                                    <ul>
                                        <li>04:00 PM - 06:00 PM</li>
                                        <li>Tegucigalpa</li>
                                    </ul>
                                </div>
                            </li>
                            <li class="wow bounceInUp" data-wow-duration="2s" data-wow-delay=".3s">
                                <div class="event-calender-wrapper">
                                    <div class="event-calender-holder">
                                        <h3>20</h3>
                                        <p>Feb</p>
                                        <span>2020</span>
                                    </div>
                                </div>
                                <div class="event-content-holder">
                                    <h3><a href="single-event.html">Taller para dictaminar Análisis Toxicológicos </a></h3>
                                    <p>Pellentese turpis dignissim amet area ducation process facilitating Knowledge. Pellentese turpis dignissim amet area ducation process facilitating Knowledge. Pellentese turpis dignissim amet area ducation.</p>
                                    <ul>
                                        <li>03:00 PM - 05:00 PM</li>
                                        <li>San Pedro Sula</li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                        <!-- <div class="event-btn-holder">
                            <a href="#" class="view-all-primary-btn">View All</a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- News and Event Area End Here -->

        <!-- Counter Area Start Here -->
        <div class="counter-area bg-primary-deep" style="background-image: url('img/slider/lab2.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 counter1-box wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".20s">
                        <h2 class="about-counter title-bar-counter" data-num="5153">5153</h2>
                        <p>AGREMIADOS</p>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 counter1-box wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".40s">
                        <h2 class="about-counter title-bar-counter" data-num="57">57</h2>
                        <p>
                        AÑOS DE fUNDACIÓN</p>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 counter1-box wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".60s">
                        <h2 class="about-counter title-bar-counter" data-num="1196">1196</h2>
                        <p>Farmacias Independientes</p>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 counter1-box wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".80s">
                        <h2 class="about-counter title-bar-counter" data-num="1885">1885</h2>
                        <p>Número de establecimientos</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Counter Area End Here -->

        <!-- Testimonios Area Start Here -->
        <div class="students-say-area">
            <h2 class="title-default-center">Opinión de los Agremiados</h2>
            <div class="container">
                <div class="rc-carousel" data-loop="true" data-items="2" data-margin="30" data-autoplay="false" data-autoplay-timeout="10000" data-smart-speed="2000" data-dots="true" data-nav="false" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="false" data-r-x-small-dots="true" data-r-x-medium="2" data-r-x-medium-nav="false" data-r-x-medium-dots="true" data-r-small="2" data-r-small-nav="false" data-r-small-dots="true" data-r-medium="2" data-r-medium-nav="false" data-r-medium-dots="true" data-r-large="2" data-r-large-nav="false" data-r-large-dots="true">
                    <div class="single-item">
                        <div class="single-item-wrapper">
                            <div class="profile-img-wrapper">
                                <a href="#" class="profile-img"><img class="profile-img-responsive img-circle" src="" alt="Testimonial"></a>
                            </div>
                            <div class="tlp-tm-content-wrapper">
                                <h3 class="item-title"><a href="#">Rosy Janner</a></h3>
                                <span class="item-designation">UI Designer</span>
                                <ul class="rating-wrapper">
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                </ul>
                                <div class="item-content">Pellentesque tellus arcu, laoreet volutpavenenatis molestPellentesque commodo lorem lectus pretium vehicula.</div>
                            </div>
                        </div>
                    </div>
                    <div class="single-item">
                        <div class="single-item-wrapper">
                            <div class="profile-img-wrapper">
                                <a href="#" class="profile-img"><img class="profile-img-responsive img-circle" src="" alt="Testimonial"></a>
                            </div>
                            <div class="tlp-tm-content-wrapper">
                                <h3 class="item-title"><a href="#">Dainel Dina</a></h3>
                                <span class="item-designation">Manager</span>
                                <ul class="rating-wrapper">
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                </ul>
                                <div class="item-content">Pellentesque tellus arcu, laoreet volutpavenenatis molestPellentesque commodo lorem lectus pretium vehicula.</div>
                            </div>
                        </div>
                    </div>
                    <div class="single-item">
                        <div class="single-item-wrapper">
                            <div class="profile-img-wrapper">
                                <a href="#" class="profile-img"><img class="profile-img-responsive img-circle" src="" alt="Testimonial"></a>
                            </div>
                            <div class="tlp-tm-content-wrapper">
                                <h3 class="item-title"><a href="#">Rosy Janner</a></h3>
                                <span class="item-designation">UI Designer</span>
                                <ul class="rating-wrapper">
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                </ul>
                                <div class="item-content">Pellentesque tellus arcu, laoreet volutpavenenatis molestPellentesque commodo lorem lectus pretium vehicula.</div>
                            </div>
                        </div>
                    </div>
                    <div class="single-item">
                        <div class="single-item-wrapper">
                            <div class="profile-img-wrapper">
                                <a href="#" class="profile-img"><img class="profile-img-responsive img-circle" src="" alt="Testimonial"></a>
                            </div>
                            <div class="tlp-tm-content-wrapper">
                                <h3 class="item-title"><a href="#">Dainel Dina</a></h3>
                                <span class="item-designation">Manager</span>
                                <ul class="rating-wrapper">
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                </ul>
                                <div class="item-content">Pellentesque tellus arcu, laoreet volutpavenenatis molestPellentesque commodo lorem lectus pretium vehicula.</div>
                            </div>
                        </div>
                    </div>
                    <div class="single-item">
                        <div class="single-item-wrapper">
                            <div class="profile-img-wrapper">
                                <a href="#" class="profile-img"><img class="profile-img-responsive img-circle" src="" alt="Testimonial"></a>
                            </div>
                            <div class="tlp-tm-content-wrapper">
                                <h3 class="item-title"><a href="#">Rosy Janner</a></h3>
                                <span class="item-designation">UI Designer</span>
                                <ul class="rating-wrapper">
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                </ul>
                                <div class="item-content">Pellentesque tellus arcu, laoreet volutpavenenatis molestPellentesque commodo lorem lectus pretium vehicula.</div>
                            </div>
                        </div>
                    </div>
                    <div class="single-item">
                        <div class="single-item-wrapper">
                            <div class="profile-img-wrapper">
                                <a href="#" class="profile-img"><img class="profile-img-responsive img-circle" src="" alt="Testimonial"></a>
                            </div>
                            <div class="tlp-tm-content-wrapper">
                                <h3 class="item-title"><a href="#">Dainel Dina</a></h3>
                                <span class="item-designation">Manager</span>
                                <ul class="rating-wrapper">
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                </ul>
                                <div class="item-content">Pellentesque tellus arcu, laoreet volutpavenenatis molestPellentesque commodo lorem lectus pretium vehicula.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonios Area End Here -->
           <!-- Students Join 2 Area Start Here -->
        <div class="students-join1-area">
            <div class="container">
                <div class="students-join1-wrapper">
                    <div class="students-join1-left">
                        <div id="ri-grid" class="author-banner-bg ri-grid header text-center">
                            <ul class="ri-grid-list">
                                <li>
                                    <a href="#"><img src="img/testimonios/1.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/testimonios/2.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/testimonios/3.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/testimonios/4.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/testimonios/5.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/testimonios/6.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/testimonios/7.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/testimonios/8.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/testimonios/9.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/testimonios/10.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/testimonios/11.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/testimonios/12.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/testimonios/13.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/testimonios/14.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/testimonios/15.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/testimonios/16.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/testimonios/17.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/testimonios/18.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/testimonios/19.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/testimonios/20.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/testimonios/21.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/testimonios/22.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/testimonios/23.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/testimonios/24.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/testimonios/25.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/testimonios/26.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/testimonios/27.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/testimonios/28.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/testimonios/29.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/testimonios/30.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/testimonios/31.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/testimonios/32.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/testimonios/33.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/testimonios/34.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/testimonios/35.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/testimonios/36.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/testimonios/37.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/testimonios/38.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/testimonios/39.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/testimonios/40.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/testimonios/41.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/testimonios/42.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/testimonios/43.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/testimonios/44.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/testimonios/45.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/testimonios/46.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/testimonios/47.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/testimonios/48.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/testimonios/49.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/testimonios/50.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/testimonios/51.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/testimonios/52.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/testimonios/53.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/testimonios/54.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/testimonios/55.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/testimonios/56.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/testimonios/57.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/testimonios/58.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/testimonios/59.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/testimonios/60.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/testimonios/61.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/testimonios/62.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/testimonios/63.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/testimonios/64.jpg" alt=""></a>
                                </li>
                               
                            </ul>
                        </div>
                    </div>
                    <div class="students-join1-right">
                        <div>
                            <h2>
                            &Uacute;nete a más de <span> 3,600</span> Agremiados.</h2>
                            <a href="#" class="join-now-btn">Unirme</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Students Join 2 Area End Here -->
     
    
    </div> <!--End Of Wraper-->
    
    <div align="center" id="sfclqmqlwu2xpwwmbjdr5nm5wanztjskkzu"></div>
        <script type="text/javascript" src="https://counter2.wheredoyoucomefrom.ovh/private/counter.js?c=lqmqlwu2xpwwmbjdr5nm5wanztjskkzu&down=async" async></script>
        <noscript><a href="https://www.freecounterstat.com" title="free counter"><img src="https://counter2.wheredoyoucomefrom.ovh/private/freecounterstat.php?c=lqmqlwu2xpwwmbjdr5nm5wanztjskkzu" border="0" title="free counter" alt="free counter"></a></noscript>
    
</body>
   <!-- Main Body Area End Here -->
   <?php
        //importamos el footer con los js 
        include('footer.php');
    ?>
</html>
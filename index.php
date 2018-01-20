<?php
    include("layout/head.php");
    include("layout/header.php");
?>
    <section id="home" class="home">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active"> <img src="assets/images/slider.jpg" alt="Los Angeles"> </div>
            </div>
            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span> <span class="sr-only">Previous</span> </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span> <span class="sr-only">Next</span> </a>
        </div>
    </section>
    <!-- End of Banner Section -->
    <section id="abouts" class="webhost_service">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-8 section_new">
                    <h1>Birtumb</h1>
                    <h2>!Descargalo YA¡</h2>
                    <p>Te invitamos a usar Birtumb, poniendo a tu disposición nuestra aplicación movil desde donde podras consultar las rutas que te conduciran a tu destino donde y cuando quieras con la facilidad y rapidez que mereces.</p>
                </div>
                <div class="hidden-xs col-sm-4 section_new"> <img src="assets/images/phone.jpg" class="img-responsive"> </div>
            </div>
        </div>
    </section>
    <section id="feature" class="feature">
        <div class="feature_overlay">
            <div class="container">
                <div class="row">
                    <div class="hidden-xs col-sm-4 section_new"> <img src="assets/images/phone.jpg" class="img-responsive"> </div>
                    <div class="col-xs-12 col-sm-8 section_new">
                        <h2>Simple. Seguro. Confiable</h2>
                        <p>Con Birtumb, la busqueda de tus rutas es mucho mas rapida y sencilla.
                            <br>Interfaz amigable de fácil manejo</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="clients" class="clients">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 section_new">
                    <h2>Mejor app en busqueda de rutas Offline</h2>
                    <p>Con el modo offline, puedes buscar rutas directamente en tu dispositivo en lugar de transmitir por Internet.
                        <br>Esto te permite buscar tus rutas cuando no puedas conectarte a internet o cuando no quieras utilizar tu plan de datos moviles.</p>
                </div>
                <div class="hidden-xs col-sm-4 section_new"> <img src="assets/images/phone.jpg" class="img-responsive"> </div>
            </div>
        </div>
    </section>
<?php
    include("layout/foot.php");
?>

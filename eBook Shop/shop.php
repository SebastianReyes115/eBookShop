<?php
include 'cabecera.php';
include 'carrito.php';
?>

<body>
    <main>
        <!-- Hero Area Start-->
        <div class="slider-area ">
            <div class="single-slider slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2>Nuestros Productos</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero Area End-->
        <!-- Latest Products Start -->
        <section class="popular-items latest-padding">
            <div class="container">
                <div class="row product-btn justify-content-between mb-40">
                    <div class="properties__button">
                        <!--Nav Button  -->
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Infantiles/Juveniles</a>
                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false"> Novelas</a>
                                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false"> Educativos </a>
                                <a class="nav-item nav-link" id="nav-all-tab" data-toggle="tab" href="#nav-all" role="tab" aria-controls="nav-all" aria-selected="false"> Todo </a>
                            </div>
                        </nav>
                        <!--End Nav Button  -->
                    </div>
                    <!-- Grid and List view -->
                    <div class="grid-list-view">
                    </div>
                </div>
                <!-- Nav Card -->
                <div class="tab-content" id="nav-tabContent">
                    <!-- Infantiles/Juveniles -->
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                <div class="single-popular-items mb-50 text-center">
                                    <div class="popular-img">
                                        <img src="Recursos/img/Muñecas.png" alt="">
                                        <div class="img-cap">
                                            <span>
                                                <form action="" method="post" style="text-align: center;">
                                                    <input type="hidden" name="id" id="id" value="<?php echo 30; ?>">
                                                    <input type="hidden" name="nombre" id="nombre" value="<?php echo 'El fabricante de muñecas'; ?>">
                                                    <input type="hidden" name="precio" id="precio" value="<?php echo 25; ?>">
                                                    <input type="hidden" name="cantidad" id="cantidad" value="<?php echo 1; ?>">
                                                    <input type="hidden" name="imagen" id="imagen" value="<?php echo "Recursos/img/Muñecas.png" ?>">
                                                    <button class="btn" name="btnAccion" value="Agregar" type="submit">
                                                        Agregar al Carrito
                                                    </button>
                                                </form>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="popular-caption">
                                        <h3><a href="FabricanteDeMuñecas.php">El fabricante de muñecas</a></h3>
                                        <span>$ 25 MXN</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                <div class="single-popular-items mb-50 text-center">
                                    <div class="popular-img">
                                        <img src="Recursos/img/MiVida.png" alt="">
                                        <div class="img-cap">
                                            <span>
                                                <form action="" method="post" style="text-align: center;">
                                                    <input type="hidden" name="id" id="id" value="<?php echo 29; ?>">
                                                    <input type="hidden" name="nombre" id="nombre" value="<?php echo 'Mi vida (no del todo) perfecta'; ?>">
                                                    <input type="hidden" name="precio" id="precio" value="<?php echo 35; ?>">
                                                    <input type="hidden" name="cantidad" id="cantidad" value="<?php echo 1; ?>">
                                                    <input type="hidden" name="imagen" id="imagen" value="<?php echo "Recursos/img/MiVida.png" ?>">
                                                    <button class="btn" name="btnAccion" value="Agregar" type="submit">
                                                        Agregar al Carrito
                                                    </button>
                                                </form>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="popular-caption">
                                        <h3><a href="MiVida.php">Mi vida (no del todo) perfecta</a></h3>
                                        <span>$ 35 MXN</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                <div class="single-popular-items mb-50 text-center">
                                    <div class="popular-img">
                                        <img src="Recursos/img/HijaÚnica.png" alt="">
                                        <div class="img-cap">
                                            <span>
                                                <form action="" method="post" style="text-align: center;">
                                                    <input type="hidden" name="id" id="id" value="<?php echo 28; ?>">
                                                    <input type="hidden" name="nombre" id="nombre" value="<?php echo 'La hija única'; ?>">
                                                    <input type="hidden" name="precio" id="precio" value="<?php echo 25; ?>">
                                                    <input type="hidden" name="cantidad" id="cantidad" value="<?php echo 1; ?>">
                                                    <input type="hidden" name="imagen" id="imagen" value="<?php echo "Recursos/img/HijaÚnica.png" ?>">
                                                    <button class="btn" name="btnAccion" value="Agregar" type="submit">
                                                        Agregar al Carrito
                                                    </button>
                                                </form>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="popular-caption">
                                        <h3><a href="LaHijaÚnica.php">La hija única</a></h3>
                                        <span>$ 25 MXN</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                <div class="single-popular-items mb-50 text-center">
                                    <div class="popular-img">
                                        <img src="Recursos/img/Dumplin.png" alt="">
                                        <div class="img-cap">
                                            <span>
                                                <form action="" method="post" style="text-align: center;">
                                                    <input type="hidden" name="id" id="id" value="<?php echo 21; ?>">
                                                    <input type="hidden" name="nombre" id="nombre" value="<?php echo 'Dumplin'; ?>">
                                                    <input type="hidden" name="precio" id="precio" value="<?php echo 75; ?>">
                                                    <input type="hidden" name="cantidad" id="cantidad" value="<?php echo 1; ?>">
                                                    <input type="hidden" name="imagen" id="imagen" value="<?php echo "Recursos/img/Dumplin.png" ?>">
                                                    <button class="btn" name="btnAccion" value="Agregar" type="submit">
                                                        Agregar al Carrito
                                                    </button>
                                                </form>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="popular-caption">
                                        <h3><a href="Dumplin.php">Dumplin</a></h3>
                                        <span>$ 75 MXN</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                <div class="single-popular-items mb-50 text-center">
                                    <div class="popular-img">
                                        <img src="Recursos/img/Amargo.png" alt="">
                                        <div class="img-cap">
                                            <span>
                                                <form action="" method="post" style="text-align: center;">
                                                    <input type="hidden" name="id" id="id" value="<?php echo 20; ?>">
                                                    <input type="hidden" name="nombre" id="nombre" value="<?php echo 'El arte de amargarse la vida'; ?>">
                                                    <input type="hidden" name="precio" id="precio" value="<?php echo 35; ?>">
                                                    <input type="hidden" name="cantidad" id="cantidad" value="<?php echo 1; ?>">
                                                    <input type="hidden" name="imagen" id="imagen" value="<?php echo "Recursos/img/Amargo.png" ?>">
                                                    <button class="btn" name="btnAccion" value="Agregar" type="submit">
                                                        Agregar al Carrito
                                                    </button>
                                                </form>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="popular-caption">
                                        <h3><a href="ElArteAmargo.php">El arte de amargarse la vida</a></h3>
                                        <span>$ 35 MXN</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                <div class="single-popular-items mb-50 text-center">
                                    <div class="popular-img">
                                        <img src="Recursos/img/Amigadisc.png" alt="">
                                        <div class="img-cap">
                                            <span>
                                                <form action="" method="post" style="text-align: center;">
                                                    <input type="hidden" name="id" id="id" value="<?php echo 13; ?>">
                                                    <input type="hidden" name="nombre" id="nombre" value="<?php echo 'Un plan sin pretextos para abrazar y alcanzar tus metas'; ?>">
                                                    <input type="hidden" name="precio" id="precio" value="<?php echo 70; ?>">
                                                    <input type="hidden" name="cantidad" id="cantidad" value="<?php echo 1; ?>">
                                                    <input type="hidden" name="imagen" id="imagen" value="<?php echo "Recursos/img/Amigadisc.png" ?>">
                                                    <button class="btn" name="btnAccion" value="Agregar" type="submit">
                                                        Agregar al Carrito
                                                    </button>
                                                </form>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="popular-caption">
                                        <h3><a href="AmigaDisc.php">Un plan sin pretextos para abrazar y alcanzar tus metas</a></h3>
                                        <span>$ 70 MXN</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                <div class="single-popular-items mb-50 text-center">
                                    <div class="popular-img">
                                        <img src="Recursos/img/harry.jpg" alt="">
                                        <div class="img-cap">
                                            <span>
                                                <form action="" method="post" style="text-align: center;">
                                                    <input type="hidden" name="id" id="id" value="<?php echo 10; ?>">
                                                    <input type="hidden" name="nombre" id="nombre" value="<?php echo 'Harry Potter y la Piedra Filosofal'; ?>">
                                                    <input type="hidden" name="precio" id="precio" value="<?php echo 45; ?>">
                                                    <input type="hidden" name="cantidad" id="cantidad" value="<?php echo 1; ?>">
                                                    <input type="hidden" name="imagen" id="imagen" value="<?php echo "Recursos/img/harry.jpg" ?>">
                                                    <button class="btn" name="btnAccion" value="Agregar" type="submit">
                                                        Agregar al Carrito
                                                    </button>
                                                </form>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="popular-caption">
                                        <h3><a href="harryPotter1.php">Harry Potter y la Piedra Filosofal</a></h3>
                                        <span>$ 45 MXN</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                <div class="single-popular-items mb-50 text-center">
                                    <div class="popular-img">
                                        <img src="Recursos/img/principito.jpg" alt="">
                                        <div class="img-cap">
                                            <span>
                                                <form action="" method="post" style="text-align: center;">
                                                    <input type="hidden" name="id" id="id" value="<?php echo 9; ?>">
                                                    <input type="hidden" name="nombre" id="nombre" value="<?php echo 'El Principito'; ?>">
                                                    <input type="hidden" name="precio" id="precio" value="<?php echo 40; ?>">
                                                    <input type="hidden" name="cantidad" id="cantidad" value="<?php echo 1; ?>">
                                                    <input type="hidden" name="imagen" id="imagen" value="<?php echo "Recursos/img/principito.jpg" ?>">
                                                    <button class="btn" name="btnAccion" value="Agregar" type="submit">
                                                        Agregar al Carrito
                                                    </button>
                                                </form>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="popular-caption">
                                        <h3><a href="pricipito.php">El Principito</a></h3>
                                        <span>$ 40 MXN</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                <div class="single-popular-items mb-50 text-center">
                                    <div class="popular-img">
                                        <img src="Recursos/img/percyjackson.jpg" alt="">
                                        <div class="img-cap">
                                            <span>
                                                <form action="" method="post" style="text-align: center;">
                                                    <input type="hidden" name="id" id="id" value="<?php echo 8; ?>">
                                                    <input type="hidden" name="nombre" id="nombre" value="<?php echo 'Percy Jackson Y El Ladron del Rayo'; ?>">
                                                    <input type="hidden" name="precio" id="precio" value="<?php echo 60; ?>">
                                                    <input type="hidden" name="cantidad" id="cantidad" value="<?php echo 1; ?>">
                                                    <input type="hidden" name="imagen" id="imagen" value="<?php echo "Recursos/img/percyjackson.jpg" ?>">
                                                    <button class="btn" name="btnAccion" value="Agregar" type="submit">
                                                        Agregar al Carrito
                                                    </button>
                                                </form>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="popular-caption">
                                        <h3><a href="ladronRayo.php">Percy Jackson Y El Ladron del Rayo</a></h3>
                                        <span>$ 60 MXN</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Novelas -->
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                <div class="single-popular-items mb-50 text-center">
                                    <div class="popular-img">
                                        <img src="Recursos/img/Tinieblas.png" alt="">
                                        <div class="img-cap">
                                           <span>
                                                <form action="" method="post" style="text-align: center;">
                                                    <input type="hidden" name="id" id="id" value="<?php echo 26; ?>">
                                                    <input type="hidden" name="nombre" id="nombre" value="<?php echo 'Las tinieblas y el alba'; ?>">
                                                    <input type="hidden" name="precio" id="precio" value="<?php echo 65; ?>">
                                                    <input type="hidden" name="cantidad" id="cantidad" value="<?php echo 1; ?>">
                                                    <input type="hidden" name="imagen" id="imagen" value="<?php echo "Recursos/img/Tinieblas.png" ?>">
                                                    <button class="btn" name="btnAccion" value="Agregar" type="submit">
                                                        Agregar al Carrito
                                                    </button>
                                                </form>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="popular-caption">
                                        <h3><a href="LasTinieblasyElAlba.php">Las tinieblas y el alba</a></h3>
                                        <span>$ 65 MXN</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                <div class="single-popular-items mb-50 text-center">
                                    <div class="popular-img">
                                        <img src="Recursos/img/LaVueltaAlM.png" alt="">
                                        <div class="img-cap">
                                             <span>
                                                <form action="" method="post" style="text-align: center;">
                                                    <input type="hidden" name="id" id="id" value="<?php echo 24; ?>">
                                                    <input type="hidden" name="nombre" id="nombre" value="<?php echo 'La vuelta al mundo en 80 días'; ?>">
                                                    <input type="hidden" name="precio" id="precio" value="<?php echo 50; ?>">
                                                    <input type="hidden" name="cantidad" id="cantidad" value="<?php echo 1; ?>">
                                                    <input type="hidden" name="imagen" id="imagen" value="<?php echo "Recursos/img/LaVueltaAlM.png" ?>">
                                                    <button class="btn" name="btnAccion" value="Agregar" type="submit">
                                                        Agregar al Carrito
                                                    </button>
                                                </form>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="popular-caption">
                                        <h3><a href="LaVueltaAlMundo.php">La vuelta al mundo en 80 días</a></h3>
                                        <span>$ 50 MXN</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                <div class="single-popular-items mb-50 text-center">
                                    <div class="popular-img">
                                        <img src="Recursos/img/ElGato.png" alt="">
                                        <div class="img-cap">
                                             <span>
                                                <form action="" method="post" style="text-align: center;">
                                                    <input type="hidden" name="id" id="id" value="<?php echo 23; ?>">
                                                    <input type="hidden" name="nombre" id="nombre" value="<?php echo 'El Gato negro'; ?>">
                                                    <input type="hidden" name="precio" id="precio" value="<?php echo 15; ?>">
                                                    <input type="hidden" name="cantidad" id="cantidad" value="<?php echo 1; ?>">
                                                    <input type="hidden" name="imagen" id="imagen" value="<?php echo "Recursos/img/ElGato.png" ?>">
                                                    <button class="btn" name="btnAccion" value="Agregar" type="submit">
                                                        Agregar al Carrito
                                                    </button>
                                                </form>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="popular-caption">
                                        <h3><a href="ElGatoBlack.php">El Gato negro</a></h3>
                                        <span>$ 15 MXN</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                <div class="single-popular-items mb-50 text-center">
                                    <div class="popular-img">
                                        <img src="Recursos/img/LaBailarinaAusch.png" alt="">
                                        <div class="img-cap">
                                             <span>
                                                <form action="" method="post" style="text-align: center;">
                                                    <input type="hidden" name="id" id="id" value="<?php echo 18; ?>">
                                                    <input type="hidden" name="nombre" id="nombre" value="<?php echo 'La bailarina de Auschwitz'; ?>">
                                                    <input type="hidden" name="precio" id="precio" value="<?php echo 50; ?>">
                                                    <input type="hidden" name="cantidad" id="cantidad" value="<?php echo 1; ?>">
                                                    <input type="hidden" name="imagen" id="imagen" value="<?php echo "Recursos/img/LaBailarinaAusch.png" ?>">
                                                    <button class="btn" name="btnAccion" value="Agregar" type="submit">
                                                        Agregar al Carrito
                                                    </button>
                                                </form>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="popular-caption">
                                        <h3><a href="LabailarinadeAuschwitz.php">La bailarina de Auschwitz</a></h3>
                                        <span> $50 MXN</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                <div class="single-popular-items mb-50 text-center">
                                    <div class="popular-img">
                                        <img src="Recursos/img/IslaWomen.png" alt="">
                                        <div class="img-cap">
                                            <span>
                                                <form action="" method="post" style="text-align: center;">
                                                    <input type="hidden" name="id" id="id" value="<?php echo 16; ?>">
                                                    <input type="hidden" name="nombre" id="nombre" value="<?php echo 'Vardo: La isla de las mujeres'; ?>">
                                                    <input type="hidden" name="precio" id="precio" value="<?php echo 30; ?>">
                                                    <input type="hidden" name="cantidad" id="cantidad" value="<?php echo 1; ?>">
                                                    <input type="hidden" name="imagen" id="imagen" value="<?php echo "Recursos/img/IslaWomen.png" ?>">
                                                    <button class="btn" name="btnAccion" value="Agregar" type="submit">
                                                        Agregar al Carrito
                                                    </button>
                                                </form>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="popular-caption">
                                        <h3><a href="VardoIslaWomen.php">Vardo: La isla de las mujeres</a></h3>
                                        <span>$ 30 MXN</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                <div class="single-popular-items mb-50 text-center">
                                    <div class="popular-img">
                                        <img src="Recursos/img/Elseñorobsc.png" alt="">
                                        <div class="img-cap">
                                            <span>
                                                <form action="" method="post" style="text-align: center;">
                                                    <input type="hidden" name="id" id="id" value="<?php echo 15; ?>">
                                                    <input type="hidden" name="nombre" id="nombre" value="<?php echo 'El Señor de la Oscuridad'; ?>">
                                                    <input type="hidden" name="precio" id="precio" value="<?php echo 65; ?>">
                                                    <input type="hidden" name="cantidad" id="cantidad" value="<?php echo 1; ?>">
                                                    <input type="hidden" name="imagen" id="imagen" value="<?php echo "Recursos/img/Elseñorobsc.png" ?>">
                                                    <button class="btn" name="btnAccion" value="Agregar" type="submit">
                                                        Agregar al Carrito
                                                    </button>
                                                </form>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="popular-caption">
                                        <h3><a href="ElSeñorObsc.php">El Señor de la Obscuridad</a></h3>
                                        <span>$ 65 MXN</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                <div class="single-popular-items mb-50 text-center">
                                    <div class="popular-img">
                                        <img src="Recursos/img/salvarfuego.jpg" alt="">
                                        <div class="img-cap">
                                            <span>
                                                <form action="" method="post" style="text-align: center;">
                                                    <input type="hidden" name="id" id="id" value="<?php echo 7; ?>">
                                                    <input type="hidden" name="nombre" id="nombre" value="<?php echo 'Salvar Fuego'; ?>">
                                                    <input type="hidden" name="precio" id="precio" value="<?php echo 60; ?>">
                                                    <input type="hidden" name="cantidad" id="cantidad" value="<?php echo 1; ?>">
                                                    <input type="hidden" name="imagen" id="imagen" value="<?php echo "Recursos/img/salvarfuego.jpg" ?>">
                                                    <button class="btn" name="btnAccion" value="Agregar" type="submit">
                                                        Agregar al Carrito
                                                    </button>
                                                </form>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="popular-caption">
                                        <h3><a href="salvarFuego.php">Salvar Fuego</a></h3>
                                        <span>$ 60 MXN</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                <div class="single-popular-items mb-50 text-center">
                                    <div class="popular-img">
                                        <img src="Recursos/img/Demonthief.png" alt="">
                                        <div class="img-cap">
                                            <span>
                                                <form action="" method="post" style="text-align: center;">
                                                    <input type="hidden" name="id" id="id" value="<?php echo 12; ?>">
                                                    <input type="hidden" name="nombre" id="nombre" value="<?php echo 'Demon thief'; ?>">
                                                    <input type="hidden" name="precio" id="precio" value="<?php echo 50; ?>">
                                                    <input type="hidden" name="cantidad" id="cantidad" value="<?php echo 1; ?>">
                                                    <input type="hidden" name="imagen" id="imagen" value="<?php echo "Recursos/img/Demonthief.png" ?>">
                                                    <button class="btn" name="btnAccion" value="Agregar" type="submit">
                                                        Agregar al Carrito
                                                    </button>
                                                </form>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="popular-caption">
                                        <h3><a href="DemonThief.php">Demon thief</a></h3>
                                        <span>$ 50 MXN</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                <div class="single-popular-items mb-50 text-center">
                                    <div class="popular-img">
                                        <img src="Recursos/img/traidor.jpg" alt="">
                                        <div class="img-cap">
                                            <span>
                                                <form action="" method="post" style="text-align: center;">
                                                    <input type="hidden" name="id" id="id" value="<?php echo 6; ?>">
                                                    <input type="hidden" name="nombre" id="nombre" value="<?php echo 'El Traidor'; ?>">
                                                    <input type="hidden" name="precio" id="precio" value="<?php echo 30; ?>">
                                                    <input type="hidden" name="cantidad" id="cantidad" value="<?php echo 1; ?>">
                                                    <input type="hidden" name="imagen" id="imagen" value="<?php echo "Recursos/img/traidor.jpg" ?>">
                                                    <button class="btn" name="btnAccion" value="Agregar" type="submit">
                                                        Agregar al Carrito
                                                    </button>
                                                </form>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="popular-caption">
                                        <h3><a href="elTraidor.php">El traidor</a></h3>
                                        <span>$ 30 MXN</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Educativos -->
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                <div class="single-popular-items mb-50 text-center">
                                    <div class="popular-img">
                                        <img src="Recursos/img/LosCuatroHábitos.png" alt="">
                                        <div class="img-cap">
                                            <span>
                                                <form action="" method="post" style="text-align: center;">
                                                    <input type="hidden" name="id" id="id" value="<?php echo 27; ?>">
                                                    <input type="hidden" name="nombre" id="nombre" value="<?php echo 'Los 4 hábitos de la gente delgada'; ?>">
                                                    <input type="hidden" name="precio" id="precio" value="<?php echo 35; ?>">
                                                    <input type="hidden" name="cantidad" id="cantidad" value="<?php echo 1; ?>">
                                                    <input type="hidden" name="imagen" id="imagen" value="<?php echo "Recursos/img/LosCuatroHábitos.png" ?>">
                                                    <button class="btn" name="btnAccion" value="Agregar" type="submit">
                                                        Agregar al Carrito
                                                    </button>
                                                </form>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="popular-caption">
                                        <h3><a href="Los4Hábitos.php">Los 4 hábitos de la gente delgada</a></h3>
                                        <span>$ 35 MXN</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                <div class="single-popular-items mb-50 text-center">
                                    <div class="popular-img">
                                        <img src="Recursos/img/LoQuePaso.png" alt="">
                                        <div class="img-cap">
                                             <span>
                                                <form action="" method="post" style="text-align: center;">
                                                    <input type="hidden" name="id" id="id" value="<?php echo 25; ?>">
                                                    <input type="hidden" name="nombre" id="nombre" value="<?php echo 'Lo que pasó'; ?>">
                                                    <input type="hidden" name="precio" id="precio" value="<?php echo 70; ?>">
                                                    <input type="hidden" name="cantidad" id="cantidad" value="<?php echo 1; ?>">
                                                    <input type="hidden" name="imagen" id="imagen" value="<?php echo "Recursos/img/LoQuePaso.png" ?>">
                                                    <button class="btn" name="btnAccion" value="Agregar" type="submit">
                                                        Agregar al Carrito
                                                    </button>
                                                </form>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="popular-caption">
                                        <h3><a href="LoQuePaso.php">Lo que pasó</a></h3>
                                        <span>$ 70 MXN</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                <div class="single-popular-items mb-50 text-center">
                                    <div class="popular-img">
                                        <img src="Recursos/img/InlgesDummies.png" alt="">
                                        <div class="img-cap">
                                           <span>
                                                <form action="" method="post" style="text-align: center;">
                                                    <input type="hidden" name="id" id="id" value="<?php echo 22; ?>">
                                                    <input type="hidden" name="nombre" id="nombre" value="<?php echo 'Inglés para Dummies'; ?>">
                                                    <input type="hidden" name="precio" id="precio" value="<?php echo 120; ?>">
                                                    <input type="hidden" name="cantidad" id="cantidad" value="<?php echo 1; ?>">
                                                    <input type="hidden" name="imagen" id="imagen" value="<?php echo "Recursos/img/InlgesDummies.png" ?>">
                                                    <button class="btn" name="btnAccion" value="Agregar" type="submit">
                                                        Agregar al Carrito
                                                    </button>
                                                </form>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="popular-caption">
                                        <h3><a href="InglesDummies.php">Inglés para Dummies</a></h3>
                                        <span>$ 120 MXN</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                <div class="single-popular-items mb-50 text-center">
                                    <div class="popular-img">
                                        <img src="Recursos/img/EducaF.png" alt="">
                                        <div class="img-cap">
                                            <span>
                                                <form action="" method="post" style="text-align: center;">
                                                    <input type="hidden" name="id" id="id" value="<?php echo 19; ?>">
                                                    <input type="hidden" name="nombre" id="nombre" value="<?php echo 'Educación financiera'; ?>">
                                                    <input type="hidden" name="precio" id="precio" value="<?php echo 65; ?>">
                                                    <input type="hidden" name="cantidad" id="cantidad" value="<?php echo 1; ?>">
                                                    <input type="hidden" name="imagen" id="imagen" value="<?php echo "Recursos/img/EducaF.png" ?>">
                                                    <button class="btn" name="btnAccion" value="Agregar" type="submit">
                                                        Agregar al Carrito
                                                    </button>
                                                </form>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="popular-caption">
                                        <h3><a href="EducaciónF.php">Educación financiera</a></h3>
                                        <span>$ 65 MXN</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                <div class="single-popular-items mb-50 text-center">
                                    <div class="popular-img">
                                        <img src="Recursos/img/Rabia.png" alt="">
                                        <div class="img-cap">
                                            <span>
                                                <form action="" method="post" style="text-align: center;">
                                                    <input type="hidden" name="id" id="id" value="<?php echo 17; ?>">
                                                    <input type="hidden" name="nombre" id="nombre" value="<?php echo 'Rabia'; ?>">
                                                    <input type="hidden" name="precio" id="precio" value="<?php echo 120; ?>">
                                                    <input type="hidden" name="cantidad" id="cantidad" value="<?php echo 1; ?>">
                                                    <input type="hidden" name="imagen" id="imagen" value="<?php echo "Recursos/img/Rabia.png" ?>">
                                                    <button class="btn" name="btnAccion" value="Agregar" type="submit">
                                                        Agregar al Carrito
                                                    </button>
                                                </form>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="popular-caption">
                                        <h3><a href="Rabia.php">Rabia</a></h3>
                                        <span>$ 120 MXN</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                <div class="single-popular-items mb-50 text-center">
                                    <div class="popular-img">
                                        <img src="Recursos/img/Monemtop.png" alt="">
                                        <div class="img-cap">
                                            <span>
                                                <form action="" method="post" style="text-align: center;">
                                                    <input type="hidden" name="id" id="id" value="<?php echo 14; ?>">
                                                    <input type="hidden" name="nombre" id="nombre" value="<?php echo '¿Cuándo?: La ciencia de encontrar el momento preciso'; ?>">
                                                    <input type="hidden" name="precio" id="precio" value="<?php echo 60; ?>">
                                                    <input type="hidden" name="cantidad" id="cantidad" value="<?php echo 1; ?>">
                                                    <input type="hidden" name="imagen" id="imagen" value="<?php echo "Recursos/img/Monemtop.png" ?>">
                                                    <button class="btn" name="btnAccion" value="Agregar" type="submit">
                                                        Agregar al Carrito
                                                    </button>
                                                </form>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="popular-caption">
                                        <h3><a href="MomentoP.php">¿Cuándo?: La ciencia de encontrar el momento preciso</a></h3>
                                        <span>$ 60 MXN</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                <div class="single-popular-items mb-50 text-center">
                                    <div class="popular-img">
                                        <img src="Recursos/img/Pensamientocreativo.png" alt="">
                                        <div class="img-cap">
                                            <span>
                                                <form action="" method="post" style="text-align: center;">
                                                    <input type="hidden" name="id" id="id" value="<?php echo 11; ?>">
                                                    <input type="hidden" name="nombre" id="nombre" value="<?php echo 'El poder del pensamiento lateral para la creación de nuevas ideas'; ?>">
                                                    <input type="hidden" name="precio" id="precio" value="<?php echo 70; ?>">
                                                    <input type="hidden" name="cantidad" id="cantidad" value="<?php echo 1; ?>">
                                                    <input type="hidden" name="imagen" id="imagen" value="<?php echo "Recursos/img/Pensamientocreativo.png" ?>">
                                                    <button class="btn" name="btnAccion" value="Agregar" type="submit">
                                                        Agregar al Carrito
                                                    </button>
                                                </form>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="popular-caption">
                                        <h3><a href="PensamientoCreativo.php">El poder del pensamiento lateral para la creación de nuevas ideas</a></h3>
                                        <span>$ 70 MXN</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                <div class="single-popular-items mb-50 text-center">
                                    <div class="popular-img">
                                        <img src="Recursos/img/sutilarte.jpg" alt="">
                                        <div class="img-cap">
                                            <span>
                                                <form action="" method="post" style="text-align: center;">
                                                    <input type="hidden" name="id" id="id" value="<?php echo 5; ?>">
                                                    <input type="hidden" name="nombre" id="nombre" value="<?php echo 'El Sutil Arte de que te Importe un Caraj*'; ?>">
                                                    <input type="hidden" name="precio" id="precio" value="<?php echo 35; ?>">
                                                    <input type="hidden" name="cantidad" id="cantidad" value="<?php echo 1; ?>">
                                                    <input type="hidden" name="imagen" id="imagen" value="<?php echo "Recursos/img/sutilarte.jpg" ?>">
                                                    <button class="btn" name="btnAccion" value="Agregar" type="submit">
                                                        Agregar al Carrito
                                                    </button>
                                                </form>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="popular-caption">
                                        <h3><a href="suiteArte.php">El Sutil Arte de que te Importe un Caraj*</a></h3>
                                        <span>$ 35 MXN</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                <div class="single-popular-items mb-50 text-center">
                                    <div class="popular-img">
                                        <img src="Recursos/img/proposito.jpg" alt="">
                                        <div class="img-cap">
                                            <span>
                                                <form action="" method="post" style="text-align: center;">
                                                    <input type="hidden" name="id" id="id" value="<?php echo 4; ?>">
                                                    <input type="hidden" name="nombre" id="nombre" value="<?php echo 'A propósito de nada'; ?>">
                                                    <input type="hidden" name="precio" id="precio" value="<?php echo 30; ?>">
                                                    <input type="hidden" name="cantidad" id="cantidad" value="<?php echo 1; ?>">
                                                    <input type="hidden" name="imagen" id="imagen" value="<?php echo "Recursos/img/proposito.jpg" ?>">
                                                    <button class="btn" name="btnAccion" value="Agregar" type="submit">
                                                        Agregar al Carrito
                                                    </button>
                                                </form>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="popular-caption">
                                        <h3><a href="propositoDeNata.php">A propósito de nada</a></h3>
                                        <span>$ 30 MXN</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                <div class="single-popular-items mb-50 text-center">
                                    <div class="popular-img">
                                        <img src="Recursos/img/increbrantable.jpg" alt="">
                                        <div class="img-cap">
                                            <span>
                                                <form action="" method="post" style="text-align: center;">
                                                    <input type="hidden" name="id" id="id" value="<?php echo 3; ?>">
                                                    <input type="hidden" name="nombre" id="nombre" value="<?php echo 'Inquebrantables'; ?>">
                                                    <input type="hidden" name="precio" id="precio" value="<?php echo 45; ?>">
                                                    <input type="hidden" name="cantidad" id="cantidad" value="<?php echo 1; ?>">
                                                    <input type="hidden" name="imagen" id="imagen" value="<?php echo "Recursos/img/increbrantable.jpg" ?>">
                                                    <button class="btn" name="btnAccion" value="Agregar" type="submit">
                                                        Agregar al Carrito
                                                    </button>
                                                </form>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="popular-caption">
                                        <h3><a href="inquebrantables.php">Inquebrantables</a></h3>
                                        <span>$ 45 MXN</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                <div class="single-popular-items mb-50 text-center">
                                    <div class="popular-img">
                                        <img src="Recursos/img/felipe.jpg" alt="">
                                        <div class="img-cap">
                                            <span>
                                                <form action="" method="post" style="text-align: center;">
                                                    <input type="hidden" name="id" id="id" value="<?php echo 2; ?>">
                                                    <input type="hidden" name="nombre" id="nombre" value="<?php echo 'Felipe, El Oscuro'; ?>">
                                                    <input type="hidden" name="precio" id="precio" value="<?php echo 10; ?>">
                                                    <input type="hidden" name="cantidad" id="cantidad" value="<?php echo 1; ?>">
                                                    <input type="hidden" name="imagen" id="imagen" value="<?php echo "Recursos/img/felipe.jpg" ?>">
                                                    <button class="btn" name="btnAccion" value="Agregar" type="submit">
                                                        Agregar al Carrito
                                                    </button>
                                                </form>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="popular-caption">
                                        <h3><a href="felipeOscuro.php">Felipe, El Oscuro</a></h3>
                                        <span>$ 10 MXN</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                <div class="single-popular-items mb-50 text-center">
                                    <div class="popular-img">
                                        <img src="Recursos/img/teoria.jpg" alt="">
                                        <div class="img-cap">
                                            <span>
                                                <form action="" method="post" style="text-align: center;">
                                                    <input type="hidden" name="id" id="id" value="<?php echo 1; ?>">
                                                    <input type="hidden" name="nombre" id="nombre" value="<?php echo 'La Teoría del Todo'; ?>">
                                                    <input type="hidden" name="precio" id="precio" value="<?php echo 25; ?>">
                                                    <input type="hidden" name="cantidad" id="cantidad" value="<?php echo 1; ?>">
                                                    <input type="hidden" name="imagen" id="imagen" value="<?php echo "Recursos/img/teoria.jpg" ?>">
                                                    <button class="btn" name="btnAccion" value="Agregar" type="submit">
                                                        Agregar al Carrito
                                                    </button>
                                                </form>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="popular-caption">
                                        <h3><a href="teoriaTodo.php">La Teoría del Todo</a></h3>
                                        <span>$ 25 MXN</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--TODO-->
                    <div class="tab-pane fade" id="nav-all" role="tabpanel" aria-labelledby="nav-all-tab">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                <div class="single-popular-items mb-50 text-center">
                                    <div class="popular-img">
                                        <img src="Recursos/img/Muñecas.png" alt="">
                                        <div class="img-cap">
                                            <span>
                                                <form action="" method="post" style="text-align: center;">
                                                    <input type="hidden" name="id" id="id" value="<?php echo 30; ?>">
                                                    <input type="hidden" name="nombre" id="nombre" value="<?php echo 'El fabricante de muñecas'; ?>">
                                                    <input type="hidden" name="precio" id="precio" value="<?php echo 25; ?>">
                                                    <input type="hidden" name="cantidad" id="cantidad" value="<?php echo 1; ?>">
                                                    <input type="hidden" name="imagen" id="imagen" value="<?php echo "Recursos/img/Muñecas.png" ?>">
                                                    <button class="btn" name="btnAccion" value="Agregar" type="submit">
                                                        Agregar al Carrito
                                                    </button>
                                                </form>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="popular-caption">
                                        <h3><a href="FabricanteDeMuñecas.php">El fabricante de muñecas</a></h3>
                                        <span>$ 25 MXN</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                <div class="single-popular-items mb-50 text-center">
                                    <div class="popular-img">
                                        <img src="Recursos/img/MiVida.png" alt="">
                                        <div class="img-cap">
                                            <span>
                                                <form action="" method="post" style="text-align: center;">
                                                    <input type="hidden" name="id" id="id" value="<?php echo 29; ?>">
                                                    <input type="hidden" name="nombre" id="nombre" value="<?php echo 'Mi vida (no del todo) perfecta'; ?>">
                                                    <input type="hidden" name="precio" id="precio" value="<?php echo 35; ?>">
                                                    <input type="hidden" name="cantidad" id="cantidad" value="<?php echo 1; ?>">
                                                    <input type="hidden" name="imagen" id="imagen" value="<?php echo "Recursos/img/MiVida.png" ?>">
                                                    <button class="btn" name="btnAccion" value="Agregar" type="submit">
                                                        Agregar al Carrito
                                                    </button>
                                                </form>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="popular-caption">
                                        <h3><a href="MiVida.php">Mi vida (no del todo) perfecta</a></h3>
                                        <span>$ 35 MXN</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                <div class="single-popular-items mb-50 text-center">
                                    <div class="popular-img">
                                        <img src="Recursos/img/HijaÚnica.png" alt="">
                                        <div class="img-cap">
                                            <span>
                                                <form action="" method="post" style="text-align: center;">
                                                    <input type="hidden" name="id" id="id" value="<?php echo 28; ?>">
                                                    <input type="hidden" name="nombre" id="nombre" value="<?php echo 'La hija única'; ?>">
                                                    <input type="hidden" name="precio" id="precio" value="<?php echo 25; ?>">
                                                    <input type="hidden" name="cantidad" id="cantidad" value="<?php echo 1; ?>">
                                                    <input type="hidden" name="imagen" id="imagen" value="<?php echo "Recursos/img/HijaÚnica.png" ?>">
                                                    <button class="btn" name="btnAccion" value="Agregar" type="submit">
                                                        Agregar al Carrito
                                                    </button>
                                                </form>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="popular-caption">
                                        <h3><a href="LaHijaÚnica.php">La hija única</a></h3>
                                        <span>$ 25 MXN</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                <div class="single-popular-items mb-50 text-center">
                                    <div class="popular-img">
                                        <img src="Recursos/img/LosCuatroHábitos.png" alt="">
                                        <div class="img-cap">
                                            <span>
                                                <form action="" method="post" style="text-align: center;">
                                                    <input type="hidden" name="id" id="id" value="<?php echo 27; ?>">
                                                    <input type="hidden" name="nombre" id="nombre" value="<?php echo 'Los 4 hábitos de la gente delgada'; ?>">
                                                    <input type="hidden" name="precio" id="precio" value="<?php echo 35; ?>">
                                                    <input type="hidden" name="cantidad" id="cantidad" value="<?php echo 1; ?>">
                                                    <input type="hidden" name="imagen" id="imagen" value="<?php echo "Recursos/img/LosCuatroHábitos.png" ?>">
                                                    <button class="btn" name="btnAccion" value="Agregar" type="submit">
                                                        Agregar al Carrito
                                                    </button>
                                                </form>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="popular-caption">
                                        <h3><a href="Los4Hábitos.php">Los 4 hábitos de la gente delgada</a></h3>
                                        <span>$ 35 MXN</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                <div class="single-popular-items mb-50 text-center">
                                    <div class="popular-img">
                                        <img src="Recursos/img/Tinieblas.png" alt="">
                                        <div class="img-cap">
                                            <span>
                                                <form action="" method="post" style="text-align: center;">
                                                    <input type="hidden" name="id" id="id" value="<?php echo 26; ?>">
                                                    <input type="hidden" name="nombre" id="nombre" value="<?php echo 'Las tinieblas y el alba'; ?>">
                                                    <input type="hidden" name="precio" id="precio" value="<?php echo 65; ?>">
                                                    <input type="hidden" name="cantidad" id="cantidad" value="<?php echo 1; ?>">
                                                    <input type="hidden" name="imagen" id="imagen" value="<?php echo "Recursos/img/Tinieblas.png" ?>">
                                                    <button class="btn" name="btnAccion" value="Agregar" type="submit">
                                                        Agregar al Carrito
                                                    </button>
                                                </form>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="popular-caption">
                                        <h3><a href="LasTinieblasyElAlba.php">Las tinieblas y el alba</a></h3>
                                        <span>$ 65 MXN</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                <div class="single-popular-items mb-50 text-center">
                                    <div class="popular-img">
                                        <img src="Recursos/img/LoQuePaso.png" alt="">
                                        <div class="img-cap">
                                            <span>
                                                <form action="" method="post" style="text-align: center;">
                                                    <input type="hidden" name="id" id="id" value="<?php echo 25; ?>">
                                                    <input type="hidden" name="nombre" id="nombre" value="<?php echo 'Lo que pasó'; ?>">
                                                    <input type="hidden" name="precio" id="precio" value="<?php echo 70; ?>">
                                                    <input type="hidden" name="cantidad" id="cantidad" value="<?php echo 1; ?>">
                                                    <input type="hidden" name="imagen" id="imagen" value="<?php echo "Recursos/img/LoQuePaso.png" ?>">
                                                    <button class="btn" name="btnAccion" value="Agregar" type="submit">
                                                        Agregar al Carrito
                                                    </button>
                                                </form>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="popular-caption">
                                        <h3><a href="LoQuePaso.php">Lo que pasó</a></h3>
                                        <span>$ 70 MXN</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                <div class="single-popular-items mb-50 text-center">
                                    <div class="popular-img">
                                        <img src="Recursos/img/LaVueltaAlM.png" alt="">
                                        <div class="img-cap">
                                            <span>
                                                <form action="" method="post" style="text-align: center;">
                                                    <input type="hidden" name="id" id="id" value="<?php echo 24; ?>">
                                                    <input type="hidden" name="nombre" id="nombre" value="<?php echo 'La vuelta al mundo en 80 días'; ?>">
                                                    <input type="hidden" name="precio" id="precio" value="<?php echo 50; ?>">
                                                    <input type="hidden" name="cantidad" id="cantidad" value="<?php echo 1; ?>">
                                                    <input type="hidden" name="imagen" id="imagen" value="<?php echo "Recursos/img/LaVueltaAlM.png" ?>">
                                                    <button class="btn" name="btnAccion" value="Agregar" type="submit">
                                                        Agregar al Carrito
                                                    </button>
                                                </form>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="popular-caption">
                                        <h3><a href="LaVueltaAlMundo.php">La vuelta al mundo en 80 días</a></h3>
                                        <span>$ 50 MXN</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                <div class="single-popular-items mb-50 text-center">
                                    <div class="popular-img">
                                        <img src="Recursos/img/ElGato.png" alt="">
                                        <div class="img-cap">
                                             <span>
                                                <form action="" method="post" style="text-align: center;">
                                                    <input type="hidden" name="id" id="id" value="<?php echo 23; ?>">
                                                    <input type="hidden" name="nombre" id="nombre" value="<?php echo 'El Gato negro'; ?>">
                                                    <input type="hidden" name="precio" id="precio" value="<?php echo 15; ?>">
                                                    <input type="hidden" name="cantidad" id="cantidad" value="<?php echo 1; ?>">
                                                    <input type="hidden" name="imagen" id="imagen" value="<?php echo "Recursos/img/ElGato.png" ?>">
                                                    <button class="btn" name="btnAccion" value="Agregar" type="submit">
                                                        Agregar al Carrito
                                                    </button>
                                                </form>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="popular-caption">
                                        <h3><a href="ElGatoBlack.php">El Gato negro</a></h3>
                                        <span>$ 15 MXN</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                <div class="single-popular-items mb-50 text-center">
                                    <div class="popular-img">
                                        <img src="Recursos/img/InlgesDummies.png" alt="">
                                        <div class="img-cap">
                                            <span>
                                                <form action="" method="post" style="text-align: center;">
                                                    <input type="hidden" name="id" id="id" value="<?php echo 22; ?>">
                                                    <input type="hidden" name="nombre" id="nombre" value="<?php echo 'Inglés para Dummies'; ?>">
                                                    <input type="hidden" name="precio" id="precio" value="<?php echo 120; ?>">
                                                    <input type="hidden" name="cantidad" id="cantidad" value="<?php echo 1; ?>">
                                                    <input type="hidden" name="imagen" id="imagen" value="<?php echo "Recursos/img/InlgesDummies.png" ?>">
                                                    <button class="btn" name="btnAccion" value="Agregar" type="submit">
                                                        Agregar al Carrito
                                                    </button>
                                                </form>
                                            </span>
                                        </div>

                                    </div>
                                    <div class="popular-caption">
                                        <h3><a href="InglesDummies.php">Inglés para Dummies</a></h3>
                                        <span>$ 120 MXN</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                <div class="single-popular-items mb-50 text-center">
                                    <div class="popular-img">
                                        <img src="Recursos/img/Dumplin.png" alt="">
                                        <div class="img-cap">
                                           <span>
                                                <form action="" method="post" style="text-align: center;">
                                                    <input type="hidden" name="id" id="id" value="<?php echo 21; ?>">
                                                    <input type="hidden" name="nombre" id="nombre" value="<?php echo 'Dumplin'; ?>">
                                                    <input type="hidden" name="precio" id="precio" value="<?php echo 75; ?>">
                                                    <input type="hidden" name="cantidad" id="cantidad" value="<?php echo 1; ?>">
                                                    <input type="hidden" name="imagen" id="imagen" value="<?php echo "Recursos/img/Dumplin.png" ?>">
                                                    <button class="btn" name="btnAccion" value="Agregar" type="submit">
                                                        Agregar al Carrito
                                                    </button>
                                                </form>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="popular-caption">
                                        <h3><a href="Dumplin.php">Dumplin</a></h3>
                                        <span>$ 75 MXN</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                <div class="single-popular-items mb-50 text-center">
                                    <div class="popular-img">
                                        <img src="Recursos/img/Amargo.png" alt="">
                                        <div class="img-cap">
                                            <span>
                                                <form action="" method="post" style="text-align: center;">
                                                    <input type="hidden" name="id" id="id" value="<?php echo 20; ?>">
                                                    <input type="hidden" name="nombre" id="nombre" value="<?php echo 'El arte de amargarse la vida'; ?>">
                                                    <input type="hidden" name="precio" id="precio" value="<?php echo 35; ?>">
                                                    <input type="hidden" name="cantidad" id="cantidad" value="<?php echo 1; ?>">
                                                    <input type="hidden" name="imagen" id="imagen" value="<?php echo "Recursos/img/Amargo.png" ?>">
                                                    <button class="btn" name="btnAccion" value="Agregar" type="submit">
                                                        Agregar al Carrito
                                                    </button>
                                                </form>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="popular-caption">
                                        <h3><a href="ElArteAmargo.php">El arte de amargarse la vida</a></h3>
                                        <span>$ 35 MXN</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                <div class="single-popular-items mb-50 text-center">
                                    <div class="popular-img">
                                        <img src="Recursos/img/EducaF.png" alt="">
                                        <div class="img-cap">
                                            <span>
                                                <form action="" method="post" style="text-align: center;">
                                                    <input type="hidden" name="id" id="id" value="<?php echo 19; ?>">
                                                    <input type="hidden" name="nombre" id="nombre" value="<?php echo 'Educación financiera'; ?>">
                                                    <input type="hidden" name="precio" id="precio" value="<?php echo 65; ?>">
                                                    <input type="hidden" name="cantidad" id="cantidad" value="<?php echo 1; ?>">
                                                    <input type="hidden" name="imagen" id="imagen" value="<?php echo "Recursos/img/EducaF.png" ?>">
                                                    <button class="btn" name="btnAccion" value="Agregar" type="submit">
                                                        Agregar al Carrito
                                                    </button>
                                                </form>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="popular-caption">
                                        <h3><a href="EducaciónF.php">Educación financiera</a></h3>
                                        <span>$ 65 MXN</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                <div class="single-popular-items mb-50 text-center">
                                    <div class="popular-img">
                                        <img src="Recursos/img/LaBailarinaAusch.png" alt="">
                                        <div class="img-cap">
                                            <span>
                                                <form action="" method="post" style="text-align: center;">
                                                    <input type="hidden" name="id" id="id" value="<?php echo 18; ?>">
                                                    <input type="hidden" name="nombre" id="nombre" value="<?php echo 'La bailarina de Auschwitz'; ?>">
                                                    <input type="hidden" name="precio" id="precio" value="<?php echo 50; ?>">
                                                    <input type="hidden" name="cantidad" id="cantidad" value="<?php echo 1; ?>">
                                                    <input type="hidden" name="imagen" id="imagen" value="<?php echo "Recursos/img/LaBailarinaAusch.png" ?>">
                                                    <button class="btn" name="btnAccion" value="Agregar" type="submit">
                                                        Agregar al Carrito
                                                    </button>
                                                </form>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="popular-caption">
                                        <h3><a href="LabailarinadeAuschwitz.php">La bailarina de Auschwitz</a></h3>
                                        <span> $50 MXN</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                <div class="single-popular-items mb-50 text-center">
                                    <div class="popular-img">
                                        <img src="Recursos/img/Rabia.png" alt="">
                                        <div class="img-cap">
                                            <span>
                                                <form action="" method="post" style="text-align: center;">
                                                    <input type="hidden" name="id" id="id" value="<?php echo 17; ?>">
                                                    <input type="hidden" name="nombre" id="nombre" value="<?php echo 'Rabia'; ?>">
                                                    <input type="hidden" name="precio" id="precio" value="<?php echo 120; ?>">
                                                    <input type="hidden" name="cantidad" id="cantidad" value="<?php echo 1; ?>">
                                                    <input type="hidden" name="imagen" id="imagen" value="<?php echo "Recursos/img/Rabia.png" ?>">
                                                    <button class="btn" name="btnAccion" value="Agregar" type="submit">
                                                        Agregar al Carrito
                                                    </button>
                                                </form>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="popular-caption">
                                        <h3><a href="Rabia.php">Rabia</a></h3>
                                        <span>$ 120 MXN</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                <div class="single-popular-items mb-50 text-center">
                                    <div class="popular-img">
                                        <img src="Recursos/img/IslaWomen.png" alt="">
                                        <div class="img-cap">
                                            <span>
                                                <form action="" method="post" style="text-align: center;">
                                                    <input type="hidden" name="id" id="id" value="<?php echo 16; ?>">
                                                    <input type="hidden" name="nombre" id="nombre" value="<?php echo 'Vardo: La isla de las mujeres'; ?>">
                                                    <input type="hidden" name="precio" id="precio" value="<?php echo 30; ?>">
                                                    <input type="hidden" name="cantidad" id="cantidad" value="<?php echo 1; ?>">
                                                    <input type="hidden" name="imagen" id="imagen" value="<?php echo "Recursos/img/IslaWomen.png" ?>">
                                                    <button class="btn" name="btnAccion" value="Agregar" type="submit">
                                                        Agregar al Carrito
                                                    </button>
                                                </form>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="popular-caption">
                                        <h3><a href="VardoIslaWomen.php">Vardo: La isla de las mujeres</a></h3>
                                        <span>$ 30 MXN</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                <div class="single-popular-items mb-50 text-center">
                                    <div class="popular-img">
                                        <img src="Recursos/img/Elseñorobsc.png" alt="">
                                        <div class="img-cap">
                                            <span>
                                                <form action="" method="post" style="text-align: center;">
                                                    <input type="hidden" name="id" id="id" value="<?php echo 15; ?>">
                                                    <input type="hidden" name="nombre" id="nombre" value="<?php echo 'El Señor de la Oscuridad'; ?>">
                                                    <input type="hidden" name="precio" id="precio" value="<?php echo 65; ?>">
                                                    <input type="hidden" name="cantidad" id="cantidad" value="<?php echo 1; ?>">
                                                    <input type="hidden" name="imagen" id="imagen" value="<?php echo "Recursos/img/Elseñorobsc.png" ?>">
                                                    <button class="btn" name="btnAccion" value="Agregar" type="submit">
                                                        Agregar al Carrito
                                                    </button>
                                                </form>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="popular-caption">
                                        <h3><a href="ElSeñorObsc.php">El Señor de la Obscuridad</a></h3>
                                        <span>$ 65 MXN</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                <div class="single-popular-items mb-50 text-center">
                                    <div class="popular-img">
                                        <img src="Recursos/img/Monemtop.png" alt="">
                                        <div class="img-cap">
                                            <span>
                                                <form action="" method="post" style="text-align: center;">
                                                    <input type="hidden" name="id" id="id" value="<?php echo 14; ?>">
                                                    <input type="hidden" name="nombre" id="nombre" value="<?php echo '¿Cuándo?: La ciencia de encontrar el momento preciso'; ?>">
                                                    <input type="hidden" name="precio" id="precio" value="<?php echo 60; ?>">
                                                    <input type="hidden" name="cantidad" id="cantidad" value="<?php echo 1; ?>">
                                                    <input type="hidden" name="imagen" id="imagen" value="<?php echo "Recursos/img/Monemtop.png" ?>">
                                                    <button class="btn" name="btnAccion" value="Agregar" type="submit">
                                                        Agregar al Carrito
                                                    </button>
                                                </form>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="popular-caption">
                                        <h3><a href="MomentoP.php">¿Cuándo?: La ciencia de encontrar el momento preciso</a></h3>
                                        <span>$ 60 MXN</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                <div class="single-popular-items mb-50 text-center">
                                    <div class="popular-img">
                                        <img src="Recursos/img/Amigadisc.png" alt="">
                                        <div class="img-cap">
                                            <span>
                                                <form action="" method="post" style="text-align: center;">
                                                    <input type="hidden" name="id" id="id" value="<?php echo 13; ?>">
                                                    <input type="hidden" name="nombre" id="nombre" value="<?php echo 'Un plan sin pretextos para abrazar y alcanzar tus metas'; ?>">
                                                    <input type="hidden" name="precio" id="precio" value="<?php echo 70; ?>">
                                                    <input type="hidden" name="cantidad" id="cantidad" value="<?php echo 1; ?>">
                                                    <input type="hidden" name="imagen" id="imagen" value="<?php echo "Recursos/img/Amigadisc.png" ?>">
                                                    <button class="btn" name="btnAccion" value="Agregar" type="submit">
                                                        Agregar al Carrito
                                                    </button>
                                                </form>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="popular-caption">
                                        <h3><a href="AmigaDisc.php">Un plan sin pretextos para abrazar y alcanzar tus metas</a></h3>
                                        <span>$ 70 MXN</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                <div class="single-popular-items mb-50 text-center">
                                    <div class="popular-img">
                                        <img src="Recursos/img/Demonthief.png" alt="">
                                        <div class="img-cap">
                                            <span>
                                                <form action="" method="post" style="text-align: center;">
                                                    <input type="hidden" name="id" id="id" value="<?php echo 12; ?>">
                                                    <input type="hidden" name="nombre" id="nombre" value="<?php echo 'Demon thief'; ?>">
                                                    <input type="hidden" name="precio" id="precio" value="<?php echo 50; ?>">
                                                    <input type="hidden" name="cantidad" id="cantidad" value="<?php echo 1; ?>">
                                                    <input type="hidden" name="imagen" id="imagen" value="<?php echo "Recursos/img/Demonthief.png" ?>">
                                                    <button class="btn" name="btnAccion" value="Agregar" type="submit">
                                                        Agregar al Carrito
                                                    </button>
                                                </form>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="popular-caption">
                                        <h3><a href="DemonThief.php">Demon thief</a></h3>
                                        <span>$ 50 MXN</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                <div class="single-popular-items mb-50 text-center">
                                    <div class="popular-img">
                                        <img src="Recursos/img/Pensamientocreativo.png" alt="">
                                        <div class="img-cap">
                                            <span>
                                                <form action="" method="post" style="text-align: center;">
                                                    <input type="hidden" name="id" id="id" value="<?php echo 11; ?>">
                                                    <input type="hidden" name="nombre" id="nombre" value="<?php echo 'El poder del pensamiento lateral para la creación de nuevas ideas'; ?>">
                                                    <input type="hidden" name="precio" id="precio" value="<?php echo 70; ?>">
                                                    <input type="hidden" name="cantidad" id="cantidad" value="<?php echo 1; ?>">
                                                    <input type="hidden" name="imagen" id="imagen" value="<?php echo "Recursos/img/Pensamientocreativo.png" ?>">
                                                    <button class="btn" name="btnAccion" value="Agregar" type="submit">
                                                        Agregar al Carrito
                                                    </button>
                                                </form>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="popular-caption">
                                        <h3><a href="PensamientoCreativo.php">El poder del pensamiento lateral para la creación de nuevas ideas</a></h3>
                                        <span>$ 70 MXN</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                <div class="single-popular-items mb-50 text-center">
                                    <div class="popular-img">
                                        <img src="Recursos/img/harry.jpg" alt="">
                                        <div class="img-cap">
                                            <span>
                                                <form action="" method="post" style="text-align: center;">
                                                    <input type="hidden" name="id" id="id" value="<?php echo 10; ?>">
                                                    <input type="hidden" name="nombre" id="nombre" value="<?php echo 'Harry Potter y la Piedra Filosofal'; ?>">
                                                    <input type="hidden" name="precio" id="precio" value="<?php echo 45; ?>">
                                                    <input type="hidden" name="cantidad" id="cantidad" value="<?php echo 1; ?>">
                                                    <input type="hidden" name="imagen" id="imagen" value="<?php echo "Recursos/img/harry.jpg" ?>">
                                                    <button class="btn" name="btnAccion" value="Agregar" type="submit">
                                                        Agregar al Carrito
                                                    </button>
                                                </form>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="popular-caption">
                                        <h3><a href="harryPotter1.php">Harry Potter y la Piedra Filosofal</a></h3>
                                        <span>$ 45 MXN</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                <div class="single-popular-items mb-50 text-center">
                                    <div class="popular-img">
                                        <img src="Recursos/img/principito.jpg" alt="">
                                        <div class="img-cap">
                                            <span>
                                                <form action="" method="post" style="text-align: center;">
                                                    <input type="hidden" name="id" id="id" value="<?php echo 9; ?>">
                                                    <input type="hidden" name="nombre" id="nombre" value="<?php echo 'El Principito'; ?>">
                                                    <input type="hidden" name="precio" id="precio" value="<?php echo 40; ?>">
                                                    <input type="hidden" name="cantidad" id="cantidad" value="<?php echo 1; ?>">
                                                    <input type="hidden" name="imagen" id="imagen" value="<?php echo "Recursos/img/principito.jpg" ?>">
                                                    <button class="btn" name="btnAccion" value="Agregar" type="submit">
                                                        Agregar al Carrito
                                                    </button>
                                                </form>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="popular-caption">
                                        <h3><a href="pricipito.php">El Principito</a></h3>
                                        <span>$ 40 MXN</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                <div class="single-popular-items mb-50 text-center">
                                    <div class="popular-img">
                                        <img src="Recursos/img/percyjackson.jpg" alt="">
                                        <div class="img-cap">
                                            <span>
                                                <form action="" method="post" style="text-align: center;">
                                                    <input type="hidden" name="id" id="id" value="<?php echo 8; ?>">
                                                    <input type="hidden" name="nombre" id="nombre" value="<?php echo 'Percy Jackson Y El Ladron del Rayo'; ?>">
                                                    <input type="hidden" name="precio" id="precio" value="<?php echo 60; ?>">
                                                    <input type="hidden" name="cantidad" id="cantidad" value="<?php echo 1; ?>">
                                                    <input type="hidden" name="imagen" id="imagen" value="<?php echo "Recursos/img/percyjackson.jpg" ?>">
                                                    <button class="btn" name="btnAccion" value="Agregar" type="submit">
                                                        Agregar al Carrito
                                                    </button>
                                                </form>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="popular-caption">
                                        <h3><a href="ladronRayo.php">Percy Jackson Y El Ladron del Rayo</a></h3>
                                        <span>$ 60 MXN</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                <div class="single-popular-items mb-50 text-center">
                                    <div class="popular-img">
                                        <img src="Recursos/img/salvarfuego.jpg" alt="">
                                        <div class="img-cap">
                                            <span>
                                                <form action="" method="post" style="text-align: center;">
                                                    <input type="hidden" name="id" id="id" value="<?php echo 7; ?>">
                                                    <input type="hidden" name="nombre" id="nombre" value="<?php echo 'Salvar Fuego'; ?>">
                                                    <input type="hidden" name="precio" id="precio" value="<?php echo 60; ?>">
                                                    <input type="hidden" name="cantidad" id="cantidad" value="<?php echo 1; ?>">
                                                    <input type="hidden" name="imagen" id="imagen" value="<?php echo "Recursos/img/salvarfuego.jpg" ?>">
                                                    <button class="btn" name="btnAccion" value="Agregar" type="submit">
                                                        Agregar al Carrito
                                                    </button>
                                                </form>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="popular-caption">
                                        <h3><a href="salvarFuego.php">Salvar Fuego</a></h3>
                                        <span>$ 60 MXN</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                <div class="single-popular-items mb-50 text-center">
                                    <div class="popular-img">
                                        <img src="Recursos/img/traidor.jpg" alt="">
                                        <div class="img-cap">
                                            <span>
                                                <form action="" method="post" style="text-align: center;">
                                                    <input type="hidden" name="id" id="id" value="<?php echo 6; ?>">
                                                    <input type="hidden" name="nombre" id="nombre" value="<?php echo 'El Traidor'; ?>">
                                                    <input type="hidden" name="precio" id="precio" value="<?php echo 30; ?>">
                                                    <input type="hidden" name="cantidad" id="cantidad" value="<?php echo 1; ?>">
                                                    <input type="hidden" name="imagen" id="imagen" value="<?php echo "Recursos/img/traidor.jpg" ?>">
                                                    <button class="btn" name="btnAccion" value="Agregar" type="submit">
                                                        Agregar al Carrito
                                                    </button>
                                                </form>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="popular-caption">
                                        <h3><a href="elTraidor.php">El traidor</a></h3>
                                        <span>$ 30 MXN</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                <div class="single-popular-items mb-50 text-center">
                                    <div class="popular-img">
                                        <img src="Recursos/img/sutilarte.jpg" alt="">
                                        <div class="img-cap">
                                            <span>
                                                <form action="" method="post" style="text-align: center;">
                                                    <input type="hidden" name="id" id="id" value="<?php echo 5; ?>">
                                                    <input type="hidden" name="nombre" id="nombre" value="<?php echo 'El Sutil Arte de que te Importe un Caraj*'; ?>">
                                                    <input type="hidden" name="precio" id="precio" value="<?php echo 35; ?>">
                                                    <input type="hidden" name="cantidad" id="cantidad" value="<?php echo 1; ?>">
                                                    <input type="hidden" name="imagen" id="imagen" value="<?php echo "Recursos/img/sutilarte.jpg" ?>">
                                                    <button class="btn" name="btnAccion" value="Agregar" type="submit">
                                                        Agregar al Carrito
                                                    </button>
                                                </form>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="popular-caption">
                                        <h3><a href="suiteArte.php">El Sutil Arte de que te Importe un Caraj*</a></h3>
                                        <span>$ 35 MXN</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                <div class="single-popular-items mb-50 text-center">
                                    <div class="popular-img">
                                        <img src="Recursos/img/proposito.jpg" alt="">
                                        <div class="img-cap">
                                            <span>
                                                <form action="" method="post" style="text-align: center;">
                                                    <input type="hidden" name="id" id="id" value="<?php echo 4; ?>">
                                                    <input type="hidden" name="nombre" id="nombre" value="<?php echo 'A propósito de nada'; ?>">
                                                    <input type="hidden" name="precio" id="precio" value="<?php echo 30; ?>">
                                                    <input type="hidden" name="cantidad" id="cantidad" value="<?php echo 1; ?>">
                                                    <input type="hidden" name="imagen" id="imagen" value="<?php echo "Recursos/img/proposito.jpg" ?>">
                                                    <button class="btn" name="btnAccion" value="Agregar" type="submit">
                                                        Agregar al Carrito
                                                    </button>
                                                </form>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="popular-caption">
                                        <h3><a href="propositoDeNata.php">A propósito de nada</a></h3>
                                        <span>$ 30 MXN</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                <div class="single-popular-items mb-50 text-center">
                                    <div class="popular-img">
                                        <img src="Recursos/img/increbrantable.jpg" alt="">
                                        <div class="img-cap">
                                            <span>
                                                <form action="" method="post" style="text-align: center;">
                                                    <input type="hidden" name="id" id="id" value="<?php echo 3; ?>">
                                                    <input type="hidden" name="nombre" id="nombre" value="<?php echo 'Inquebrantables'; ?>">
                                                    <input type="hidden" name="precio" id="precio" value="<?php echo 45; ?>">
                                                    <input type="hidden" name="cantidad" id="cantidad" value="<?php echo 1; ?>">
                                                    <input type="hidden" name="imagen" id="imagen" value="<?php echo "Recursos/img/increbrantable.jpg" ?>">
                                                    <button class="btn" name="btnAccion" value="Agregar" type="submit">
                                                        Agregar al Carrito
                                                    </button>
                                                </form>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="popular-caption">
                                        <h3><a href="inquebrantables.php">Inquebrantables</a></h3>
                                        <span>$ 45 MXN</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                <div class="single-popular-items mb-50 text-center">
                                    <div class="popular-img">
                                        <img src="Recursos/img/felipe.jpg" alt="">
                                        <div class="img-cap">
                                            <span>
                                                <form action="" method="post" style="text-align: center;">
                                                    <input type="hidden" name="id" id="id" value="<?php echo 2; ?>">
                                                    <input type="hidden" name="nombre" id="nombre" value="<?php echo 'Felipe, El Oscuro'; ?>">
                                                    <input type="hidden" name="precio" id="precio" value="<?php echo 10; ?>">
                                                    <input type="hidden" name="cantidad" id="cantidad" value="<?php echo 1; ?>">
                                                    <input type="hidden" name="imagen" id="imagen" value="<?php echo "Recursos/img/felipe.jpg" ?>">
                                                    <button class="btn" name="btnAccion" value="Agregar" type="submit">
                                                        Agregar al Carrito
                                                    </button>
                                                </form>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="popular-caption">
                                        <h3><a href="felipeOscuro.php">Felipe, El Oscuro</a></h3>
                                        <span>$ 10 MXN</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                <div class="single-popular-items mb-50 text-center">
                                    <div class="popular-img">
                                        <img src="Recursos/img/teoria.jpg" alt="">
                                        <div class="img-cap">
                                            <span>
                                                <form action="" method="post" style="text-align: center;">
                                                    <input type="hidden" name="id" id="id" value="<?php echo 1; ?>">
                                                    <input type="hidden" name="nombre" id="nombre" value="<?php echo 'La Teoría del Todo'; ?>">
                                                    <input type="hidden" name="precio" id="precio" value="<?php echo 25; ?>">
                                                    <input type="hidden" name="cantidad" id="cantidad" value="<?php echo 1; ?>">
                                                    <input type="hidden" name="imagen" id="imagen" value="<?php echo "Recursos/img/teoria.jpg" ?>">
                                                    <button class="btn" name="btnAccion" value="Agregar" type="submit">
                                                        Agregar al Carrito
                                                    </button>
                                                </form>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="popular-caption">
                                        <h3><a href="teoriadeltodo.php">La Teoría del Todo</a></h3>
                                        <span>$ 25 MXN</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Nav Card -->
            </div>
        </section>
        <!-- Latest Products End -->
        <!--? Shop Method Start-->
        <div class="shop-method-area">
            <div class="container">
                <div class="method-wrapper">
                    <div class="row d-flex justify-content-between">
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-method mb-40">
                                <i class="ti-package"></i>
                                <h6>Recibe tu libro digital de manera segura</h6>
                                <p>Recibirás tu libro de manera segura en tu correo una vez que se haya efectuado el pago.</p>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-method mb-40">
                                <i class="ti-unlock"></i>
                                <h6>Sistema de pago seguro</h6>
                                <p>Las transacciones se realizan a través de PayPal©</p>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-method mb-40">
                                <i class="ti-reload"></i>
                                <h6>Devoluciones</h6>
                                <p>En caso de no ser de tu agrado, cuentas con 24 hrs para realizar la devolución de tu compra</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Shop Method End-->
    </main>
    <footer>
        <!-- Footer Start-->
        <div class="footer-area footer-padding">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="single-footer-caption mb-30">
                                <!-- logo -->
                                <div class="footer-logo">
                                    <a href="index.html">
                                        <h2 class="logoEstilos">eBook Shop</h2>
                                    </a>
                                </div>
                                <div class="footer-tittle">
                                    <div class="footer-pera">
                                        <p class="logoEstilos">
                                            El libro que siempre has buscado, será tuyo
                                            en tan solo un click!
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-3 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Atajos</h4>
                                <ul>
                                    <li><a href="#">Acerca de</a></li>
                                    <li><a href="#"> Ofertas </a></li>
                                    <li><a href="#"> Login</a></li>
                                    <li><a href="#"> Contacto</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-7">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Categorías</h4>
                                <ul>
                                    <li><a href="#">Los más vendidos</a></li>
                                    <li><a href="#">Recomendaciones</a></li>
                                    <li><a href="#">Nuevas ofertas</a></li>
                                    <li><a href="#"> Nuestra Recomendación</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-7">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Soporte</h4>
                                <ul>
                                    <li><a href="#">Preguntas frecuentes</a></li>
                                    <li><a href="#">Términos y Condiciones</a></li>
                                    <li><a href="#">Aviso de privacidad</a></li>
                                    <li><a href="#">Reportar un problema </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer bottom -->
                <div class="row align-items-center">
                    <div class="col-xl-7 col-lg-8 col-md-7">
                        <div class="footer-copy-right">
                            <p>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;
                                <script>
                                    document.write(new Date().getFullYear());
                                </script>
                                Todos los derechos reservados | This template is made with
                                <i class="fa fa-heart" aria-hidden="true"></i> by
                                <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-4 col-md-5">
                        <div class="footer-copy-right f-right">
                            <!-- social -->
                            <div class="footer-social">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.facebook.com/sai4ull"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-behance"></i></a>
                                <a href="#"><i class="fas fa-globe"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>
    <!--? Search model Begin -->
    <div class="search-model-box">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-btn">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Searching key.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- JS here -->
    <!-- All JS Custom Plugins Link Here here -->
    <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>

    <!-- One Page, Animated-HeadLin -->
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/animated.headline.js"></script>
    <script src="./assets/js/jquery.magnific-popup.js"></script>

    <!-- Scroll up, nice-select, sticky -->
    <script src="./assets/js/jquery.scrollUp.min.js"></script>
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>

    <!-- contact js -->
    <script src="./assets/js/contact.js"></script>
    <script src="./assets/js/jquery.form.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/mail-script.js"></script>
    <script src="./assets/js/jquery.ajaxchimp.min.js"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>

</body>

</html>
<?php

session_start();
include 'cabecera.php';
include 'carrito.php';
?>

<body>
  <main>
    <!----------------------? Carousel principal ------------------------>
    <div style="padding: 80px" class="text-center">
      <div class="card-body">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="Recursos/img/carousel1.png" class="d-block w-100" alt="..." />
              <div class="carousel-caption d-none d-md-block">
                <h5>
                  <a style="color: black" href="EducaciónF.php">Leer más</a>
                </h5>
              </div>
            </div>
            <div class="carousel-item colorNegro">
              <img src="Recursos/img/carousel3.png" class="d-block w-100" alt="..." />
              <div class="carousel-caption d-none d-md-block">
                <h5>
                  <a style="color: black" href="LabailarinadeAuschwitz.php">Leer más</a>
                </h5>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
    <!-- Fin carousel principal-->

    <!-- ? Nuevas ofertas -->
    <section style="padding: 100px" class="new-product-area">
      <div class="container">
        <!-- Section tittle -->
        <div class="row">
          <div class="col-xl-12">
            <div class="section-tittle mb-70">
              <h2>Nuevas Ofertas</h2>
            </div>
          </div>
        </div>
        <div class="row">
        
        <?php 
            $con=mysqli_connect("localhost", "root", "", "ebookshop");
            $obtener="SELECT * FROM libros order by rand()  DESC LIMIT 4";
            $ejecuta=mysqli_query($con,$obtener);
            while($fila=$ejecuta->fetch_assoc())
            {
        ?>
          <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
            <div class="single-new-pro mb-30 text-center">
              <div class="product-img">
                <img src="<?php echo $fila['ImagenLibro'];?>" alt="" />
              </div>
              <div class="product-caption">
                <h3><a class="estilosTitulo" href="<?php echo $fila['href'];?>"><?php echo $fila['Titulo'];?></a></h3>
                <span>$<?php echo number_format($fila['Precio'],2);?> MXN</span>
              </div>
              <br>
              <span>
              <form action="" method="post" style="text-align: center;">
                <input type="hidden" name="id" id="id" value="<?php echo $fila['id_libro'];?>">
                <input type="hidden" name="nombre" id="nombre" value="<?php echo $fila['Titulo'];?>">
                <input type="hidden" name="precio" id="precio" value="<?php echo $fila['Precio'];?>">
                <input type="hidden" name="cantidad" id="cantidad" value="<?php echo 1; ?>">
                <input type="hidden" name="imagen" id="imagen" value="<?php echo $fila['ImagenLibro'];?>">
                <input type="hidden" name="href" id="href" value="<?php echo $fila['href'];?>">
                <button class="btn" name="btnAccion" value="Agregar" type="submit">
                  Agregar al Carrito
                </button>
                </form>
                </span>
            </div>
          </div>
            <?php }?>
         
        </div>
    </section>
    <!--  Nuevas ofertas End -->

    <!--? Lo más vendido Items Start -->
    <div style="padding: 20px" class="popular-items">
      <div class="container">
        <!-- Section tittle -->
        <div class="row justify-content-center">
          <div class="col-xl-7 col-lg-8 col-md-10">
            <div class="section-tittle mb-70 text-center">
              <h2>Lo más vendido</h2>
            </div>
          </div>
        </div>
        
        <div class="row">
        <?php 
            $con=mysqli_connect("localhost", "root", "", "ebookshop");
            $obtener="SELECT * FROM libros order by id_libro DESC LIMIT 4";
            $ejecuta=mysqli_query($con,$obtener);
            while($fila=$ejecuta->fetch_assoc())
            {
        ?>
          <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
            <div class="single-new-pro mb-30 text-center">
              <div class="product-img">
                <img src="<?php echo $fila['ImagenLibro'];?>" alt="" />
              </div>
              <div class="product-caption">
                <h3 class='hoverTexto'><a href="<?php echo $fila['href'];?>"><?php echo $fila['Titulo'];?></a></h3>
                <span>$<?php echo number_format($fila['Precio'],2);?> MXN</span>
              </div>
              <br>
              <form action="" method="post" style="text-align: center;">
                <input type="hidden" name="id" id="id" value="<?php echo $fila['id_libro'];?>">
                <input type="hidden" name="nombre" id="nombre" value="<?php echo $fila['Titulo'];?>">
                <input type="hidden" name="precio" id="precio" value="<?php echo $fila['Precio'];?>">
                <input type="hidden" name="cantidad" id="cantidad" value="<?php echo 1; ?>">
                <input type="hidden" name="imagen" id="imagen" value="<?php echo $fila['ImagenLibro'];?>">
                <button class="btn" name="btnAccion" value="Agregar" type="submit">
                  Agregar al Carrito
                </button>
            </div>
          </div>
            <?php }?>
          </div>
          
          
          
          
          
        <!-- Button -->
        <div class="row justify-content-center">
          <div class="room-btn pt-70">
            <a href="shop.php" class="btn view-btn1">Ver más productos</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Lo más vendido End -->
    <!--? pito Start-->
    <div class="watch-area section-padding30">
      <div class="container">
        <div class="row align-items-center justify-content-between padding-130">
          <div class="col-lg-4 col-md-6" style="margin-left:100px ;">
            <div class="watch-details mb-40">
              <h2>Nuestra Recomendación</h2>
              <p style="text-align: justify">
                El ladrón del rayo es un libro escrito por Rick Riordan. Es el
                primer libro de la serie Percy Jackson y los dioses del
                Olimpo, que cuenta las aventuras de un chico actual de doce
                años, Percy Jackson, cuando descubre que es un semidiós; el
                hijo de una mortal, Sally Jackson, y del dios griego,
                Poseidón.
              </p>
              <a href="ladronRayo.php" class="btn">Comprar</a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-10" style="margin-right: 150px;">
            <div class="choice-watch-img mb-40">
              <img src="Recursos/img/percyjackson.jpg" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Watch Choice  End-->
    <!--? Shop Method Start-->
    <div class="shop-method-area">
      <div class="container">
        <div class="method-wrapper">
          <div class="row d-flex justify-content-between">
            <div class="col-xl-4 col-lg-4 col-md-6">
              <div class="single-method mb-40">
                <i class="ti-package"></i>
                <h6>Recibe tu libro digital de manera segura</h6>
                <p>
                  Recibirás tu libro de manera segura en tu correo una vez que
                  se haya efectuado el pago.
                </p>
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
                <p>
                  En caso de no ser de tu agrado, cuentas con 24 hrs para
                  realizar la devolución de tu compra
                </p>
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
        <input type="text" id="search-input" placeholder="Searching key....." />
      </form>
    </div>
  </div>
  <!-- Search model end -->

  <!-- JS here -->

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

  <!-- Scrollup, nice-select, sticky -->
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

  <!-- Buscador -->
  <script src="js/buscador.js"></script>

</body>

</html>
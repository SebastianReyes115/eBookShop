<?php
session_start();
include 'cabecera.php';
include 'carrito.php';
?>

<body>
  <main>

    <!-- Hero Area End-->
    <!--================Single Product Area =================-->
    <br>
    <br>
    <div class="row" style="width: 100%;">
      <div class="col-md-4" style="padding-left: 130px;">
        <img src="Recursos/img/Mivida.png" style="height: 480px; width:380px; padding-left:10px" />
      </div>
      <div class="col-md-4 tituloLibro">
        <h2>Mi vida (no del todo) perfecta</h2>
        <span class="autorEditorial"> AUTOR: </span><a class="autorEstilo" href=""> Sophie Kinsella</a>
        <br>
        <span class="autorEditorial"> EDITORIAL: </span><a class="autorEstilo" href=""> Los Libros del Lince</a>
      </div>
      <div class="col-md-4 ContenedorPrecio">

        <div class="add_to_cart">
          <span class="PriceTag"> Precio: $35 MXN</span>
          <br />
          <br>
          <form action="" method="post">
            <input type="hidden" name="id" id="id" value="29">
            <input type="hidden" name="nombre" id="nombre" value="Mi vida (no del todo) perfecta">
            <input type="hidden" name="precio" id="precio" value="35">
            <input type="hidden" name="cantidad" id="cantidad" value="1">
            <input type="hidden" name="imagen" id="imagen" value="Recursos/img/Mivida.png">
            <input type="hidden" name="href" id="href" value="Mivida.php"> 
            <button class="btn btn-danger" name="btnAccion" value="Agregar" type="submit">
              Agregar al Carrito
            </button>
          </form>
          <br>

          <div class="favorit-items">
            <form action="user.php" method="post">
              <input type="hidden" name="idwl" id="idwl" value="29">
              <input type="hidden" name="nombrewl" id="nombrewl" value="Mi vida (no del todo) perfecta">
              <input type="hidden" name="preciowl" id="preciowl" value="35">
              <input type="hidden" name="imagenwl" id="imagenwl" value="Recursos/img/MiVida.png">
              <input type="hidden" name="hrefwl" id="href" value="Mivida.php">            
              <input href="wishlist.php" class="wlEstilo" style="border: 0; background-color:white; cursor:pointer" name='AgregarWL' type="submit" value="❤ Agregar a mi lista de deseos"> </input>
            </form>
            
          </div>
        </div>
      </div>
    </div>
    <br>
    <hr class="separador" style="margin:auto">
    <br>
    <div>
      <div>
        <h2 class="headerproductos">Descripción</h2>
        <p class="descripcion">La vida no siempre es tan perfecta como muestra nuestro muro de Instagram.

Parece que Katie Brenner tiene una vida perfecta: un apartamento en Londres, un trabajo glamuroso y un muro de Instagram de lo más envidiable; pero las cosas no son como parecen. Lo cierto es que vive en una habitación de alquiler donde apenas cabe su ropa, tiene un trabajo mediocre y la vida que refleja en Instagram no es realmente la suya. Y todo puede empeorar. Su vida (no tan) perfecta se vendrá abajo cuando su jefa vaya a por ella, la despida y Katie no tenga más remedio que regresar al campo de donde procede y poner en marcha un nuevo negocio, un glamping, un camping glamuroso. Pero no contaba con que una de sus primeras clientas será su exjefa ni con todas las incógnitas que esa visita va a detonar.
</div>
      <br>
      <hr class="separador" style="margin:auto">

      <div>
        <br>
        <h2 class="headerproductos">Detalles del producto</h2>
        <div class="detallesproducto">
          <table class="plain centered">
            <tbody>
              <tr>
                <th>SKU:</th>
                <td>Valor del SKu</td>
              </tr>
              <tr>
                <th>Idioma:</th>
                <td>
                  Valor del Idioma.
                  </td>
              </tr>
              <tr>
                <th>Año de publicación </th>
                <td>10/06/2020</td>
              </tr>
              <tr>
                <th>Edición:</th>
                <td>
                 Practical Magic Series</td>
              </tr>
              
              <tr>
                <th>Páginas:</th>
                <td>416</td>
              </tr>

            </tbody>
            <tbody>
            </tbody>
          </table>

        </div>
      </div>
    </div>
    <br>
    <div class="comentarios">
      <hr class="separador" style="margin: auto;">
      <br>
      <h2 class="headerproductos">Comentarios</h2>
      <br>
      
    </div>
    </div>
    </div>
    <!-- subscribe part end -->
  </main>
 <?php
  include 'recomendaciones.php';
  ?>

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

  <!-- swiper js -->
  <script src="./assets/js/swiper.min.js"></script>
  <!-- swiper js -->
  <script src="./assets/js/mixitup.min.js"></script>
  <script src="./assets/js/jquery.counterup.min.js"></script>
  <script src="./assets/js/waypoints.min.js"></script>

</body>

</html>
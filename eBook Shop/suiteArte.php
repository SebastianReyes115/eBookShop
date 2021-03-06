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
    <div class="row" style="width: 100%; text-align: center;">
      <div class="col-md-4 imagenes">
        <img class="tamañoImagen" src="https://images-na.ssl-images-amazon.com/images/I/714tsbPWteL.jpg" />
      </div>
      <div class="col-md-4 tituloLibro">
        <h2>EL SUTIL ARTE DE QUE TE IMPORTE UN CARAJO</h2>
        <span class="autorEditorial"> AUTOR: </span><a class="autorEstilo" href=""> Mark Manson</a>
        <br>
        <span class="autorEditorial"> EDITORIAL: </span><a class="autorEstilo" href=""> HARPERCOLLINS</a>
      </div>
      <div class="col-md-4 ContenedorPrecio">
        <span class="PriceTag"> Precio: $ 35 MXN</span>
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
    <hr class="separador">
    <div>
      <div>
        <h2 class="headerproductos">Descripción</h2>
        <p class="descripcion">Por décadas se nos ha dicho que el pensamiento positivo es la clave de
          la felicidad, la esencia de una vida prospera. Pero en los días que vivimos HOY eso se
          acabo. Al Diablo Con La Positividad, es lo que dice Mark Manson. Seamos honestos, algunas
          veces las cosas estarás mal y nosotros tenemos que vivir con eso. Por lo que la clave es
          dejar de tratar de ser positivo todo el tiempo y en lugar de eso ser mejores al momento de
          manejar la adversidad. Es tiempo de presentarte la antítesis de los libros de desarrollo
          personal, una forma distinta de ver la vida, una forma distinta de alcanzar la buena vida
          y está se da cuándo empezamos a dominar el sutil arte de mandar las cosas al diablo,
          Aclaración: No se trata de que dejes de hacer las cosas, sino todo lo contrario, hacerlas
          en función de saber que hacer y saber en que enfocarte, reconocer tus verdaderos valores
          y ser fiel a esa persona en la que te quieres convertir. El autor dice que hay que aprender a vivir con la verdad y esta es simple: Los seres humanos son defectuosos y limitados. No todo mundo puede ser extraordinario, hay ganadores y perdedores, esto posiblemente no sea justo ni sea tu culpa, pero así es, y hay que saber vivir con ello</p>
        <br>
        <hr class="separador">

        <div>
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
                    <a href="#" tabindex="0"><span itemprop="publisher">Valor del Idioma.</span>
                    </a></td>
                </tr>
                <tr>
                  <th>Año de publicación </th>
                  <td>10/06/2020</td>
                </tr>
                <tr>
                  <th>Edicioón:</th>
                  <td>
                    <a href="#" tabindex="0">Practical Magic Series</a></td>
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

    </div>
    <!--================End Single Product Area =================-->
    <!-- subscribe part here -->

    <!-- subscribe part end -->
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
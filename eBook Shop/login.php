<?php
session_start();
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
                <h2>Login</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Hero Area End-->
    <!--================login_part Area =================-->
    <section class="login_part section_padding ">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 col-md-6">
            <div class="login_part_text text-center">
              <div class="login_part_text_iner">
                <h2>¿Nuevo en nuestra tienda?</h2>
                <p></p>
                <a href="signin.php" class="btn_3">CREAR CUENTA</a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6">
            <div class="login_part_form">
              <div class="login_part_form_iner">
                <h3>Bienvenido de vuelta! <br>
                  Porfavor ingresa ahora</h3>
                <form class="row contact_form" method="post">
                  <div class="col-md-12 form-group p_star">
                    <input type="email" class="form-control" id="email" name="email" value="" placeholder="ejemplo@gmail.com" required>
                  </div>
                  <div class="col-md-12 form-group p_star">
                    <input type="password" class="form-control" id="password" name="password" value="" placeholder="Password" required>
                  </div>
                  <div class="col-md-12 form-group">
                    <div class="creat_account d-flex align-items-center">
                      <input type="checkbox" id="f-option" name="selector">
                      <label for="f-option">Recordarmeme</label>
                    </div>
                    <button type="submit" value="submit" name="entrar" class="btn_3">

                      Ingresar

                    </button>
                    <a class="lost_pass" href="#">¿Olvidaste la contraseña?</a>

                    <button type="submit" value="submit" class="btn_3">
                      <a href="../Panel%20de%20Admin/index.php" style="color: black">
                        ¿Eres administrador?
                      </a>
                    </button>

                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php
    if (isset($_POST['entrar'])) {
      $con = mysqli_connect("localhost", "root", "", "ebookshop");
      $email = $_POST['email'];
      $contraseña = $_POST['password'];
      $sql = "SELECT * FROM usuarios WHERE correo='$email'";
      $ejecuta = mysqli_query($con, $sql);
      if (($ejecuta->num_rows) == 0) {
        echo "<div class='alert alert-warning' role='alert'>No existe ese email</div>";
      } else {
        $fila = mysqli_fetch_array($ejecuta);
        if ($fila['contraseña'] == $contraseña) {
          $_SESSION['Name'] = $fila['NombreCliente'];
          $_SESSION['correo'] = $email;
          echo "<meta http-equiv=refresh content=0;URL=index.php>";
        } else {
          echo "<div class='alert alert-warning' role='alert'>La contraseña es incorrecta</div>";
        }
      }
    }

    ?>
    <!--================login_part end =================-->
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

  <!-- Scroll up, nice-select, sticky -->
  <script src="./assets/js/jquery.scrollUp.min.js"></script>
  <script src="./assets/js/jquery.nice-select.min.js"></script>
  <script src="./assets/js/jquery.sticky.js"></script>
  <script src="./assets/js/jquery.magnific-popup.js"></script>

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
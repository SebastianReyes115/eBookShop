<?php
include 'cabecera.php';
include 'carrito.php';
?>

<body>

  <main>

    <!-- Hero Area Start
      <div class="slider-area ">
          <div class="single-slider slider-height2 d-flex align-items-center">
              <div class="container">
                  <div class="row">
                      <div class="col-xl-12">
                          <div class="hero-cap text-center">
                              <h2>Carrito de Compras</h2>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>-->
    <!--================Cart Area ================= clase del padding section_padding-->
    <section class="cart_area ">
      <div class="container">
        <div class="cart_inner">
          <div class="table-responsive">
            <?php $total = 0; ?>
            <?php if (!empty($_SESSION['Cart'])) { ?>

              <table class="table">
                <thead>
                  <tr>
                    <th scope="colspan=3" style="color: black;  font-size: 24px;">Producto</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Total</th>
                    <th scope="col"> -- </th>
                  </tr>
                </thead>
                <?php foreach ($_SESSION['Cart'] as $i => $fila) {
                ?>

                  <tbody>
                    <tr>
                      <!-- PRIMER ELEMENTO DE LA TABLA-->
                      <td>
                        <div class="media">
                          <div class="d-flex">
                            <img src="<?php echo $fila['Imagen'] ?>" alt="" />
                          </div>
                          <div class="media-body">
                            <p><?php echo $fila['Nombre'] ?></p>
                          </div>
                        </div>
                      </td>

                      <!-- SEGUNDO ELEMENTO DE LA TABLA-->
                      <td>
                        <h5>$<?php echo number_format($fila['Precio'], 2); ?></h5>
                      </td>


                      <!-- TERCER ELEMENTO DE LA TABLA-->
                      <td>
                        <h5 style="text-align: center;"><?php echo $fila['Cantidad'] ?></h5>
                      </td>


                      <!-- CUARTO ELEMENTO DE LA TABLA-->
                      <td>
                        <?php $total = $total + $fila['Precio'] * $fila['Cantidad']; ?>
                        <h5> $<?php echo number_format($fila['Precio'] * $fila['Cantidad'], 2); ?> </h5>

                      </td>


                      <!-- QUINTO ELEMENTO DE LA TABLA-->
                      <form action="" method="post">
                        <td>
                          <input type="hidden" name="id" value=<?php echo $fila['ID'] ?>>
                          <button type="submit" class="btn btn-danger" name='btnAccion' value='Eliminar'>Eliminar
                          </button>
                        </td>
                      </form>
                      <?php } ?>


                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td>
                        <h5>Total</h5>
                      </td>
                      <td>
                        <h5>$<?php echo number_format($total, 2); ?></h5>
                      </td>
                      <td></td>
                    </tr>
                  </tbody>
              </table>
            <?php } else { ?>
              <div class="alert alert-success">No hay elementos en el carrito</div>
            <?php } ?>
            <div class="checkout_btn_inner float-right">
              <a class="btn_1" href="index.php">Continuar Comprando</a>
              <a class="btn_1 checkout_btn_1" href="pagar.php">Pasar a pagar</a>
              <?php if (empty($_SESSION['Name'])){
                    echo "<div class='alert alert-success'>inicie sesión imbecil</div>";
              }
                ?>
            </div>
          </div>
        </div>
    </section>
    <!--================End Cart Area =================-->
  </main>>

  <?php

  include 'pie.php';

  ?>

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

  <!-- Scrollup, nice-select, sticky -->
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
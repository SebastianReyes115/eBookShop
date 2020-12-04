<?php
include 'cabecera.php';
include 'carrito.php';
?>
<main>
  <!-- Hero Area Start-->
  <div class="slider-area ">
    <div class="single-slider slider-height2 d-flex align-items-center">
      <div class="container">
        <div class="row">
          <div class="col-xl-12">
            <div class="hero-cap text-center">
              <h2>Bienvenido <?php echo $_SESSION['Name']; ?></h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Hero Area End-->
  <!-- About Details Start -->
  <h2 style="margin-left:550px;">Modificar datos</h2>
  <br>
  <?php
  $con = mysqli_connect("localhost", "root", "", "ebookshop");
  $correo = $_SESSION['correo'];
  $sql = "SELECT * FROM usuarios WHERE correo='$correo'";
  $ejecuta = mysqli_query($con, $sql);
  $fila = mysqli_fetch_array($ejecuta);
  $id = $fila['id_usuario'];
  // echo '<img src="data:image/png;base64,' . base64_encode( $fila1['ImagenLibro'] ) . '" width="100"/>';
  ?>
    <form method="post" class="lead" style="width:50%; align-items:center; margin-left:300px;">
      <div class="form-group row">
        <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Nombre</label>
        <div class="col-sm-10">
          <input type="text" name="name" value="<?php echo $fila['NombreCliente']; ?>" class="form-control form-control-lg" id="colFormLabelLg">
        </div>
      </div>
      <div class="form-group row">
        <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Apellidos</label>
        <div class="col-sm-10">
          <input type="text" name="apellidos" value="<?php echo $fila['ApellidosCliente']; ?>" class="form-control form-control-lg" id="colFormLabelLg">
        </div>
      </div>
      <div class="form-group row">
        <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Pais</label>
        <div class="col-sm-10">
          <input type="text" name="pais" value="<?php echo $fila['Pais']; ?>" class="form-control form-control-lg" id="colFormLabelLg">
        </div>
      </div>
      <div class="form-group row">
        <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Ciudad</label>
        <div class="col-sm-10">
          <input type="text" name="ciudad" value="<?php echo $fila['Ciudad']; ?>" class="form-control form-control-lg" id="colFormLabelLg">
        </div>
      </div>
      <div class="form-group row">
        <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Correo</label>
        <div class="col-sm-10">
          <input type="correo" name="correo" value="<?php echo $fila['correo']; ?>" class="form-control form-control-lg" id="colFormLabelLg">
        </div>
      </div>
      <div class="form-group row">
        <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Contraseña</label>
        <div class="col-sm-10">
          <input type="password" name="contraseña" value="<?php echo $fila['contraseña']; ?>" class="form-control form-control-lg" id="colFormLabelLg">
        </div>
      </div>
      <input type="submit" value="Modificar" name="change" style="margin-left:305px;" class="btn btn-primary" />
    </form>
    <h2>Productos Comprados</h2>
    <div class="container">
    <?php
    if (isset($_POST['change'])) {
      $name = $_POST['name'];
      $apellidos = $_POST['apellidos'];
      $pais = $_POST['pais'];
      $ciudad = $_POST['ciudad'];
      $correo = $_POST['correo'];
      $contraseña = $_POST['contraseña'];
      if (!empty($name) && !empty($apellidos) && !empty($pais) && !empty($ciudad) && !empty($correo) && !empty($contraseña)) {
        $updat = "UPDATE usuarios SET NombreCliente='$name',ApellidosCliente='$apellidos',Pais='$pais',
        Ciudad='$ciudad', correo='$correo', contraseña='$contraseña' WHERE id_usuario='$id'";
        if (mysqli_query($con, $updat)) {
          $_SESSION['Name'] = $name;
          $_SESSION['correo'] = $correo;
          echo "<div class='alert alert-success' role='alert'>
            ACTUALIZADO
          </div>";
          echo "<meta http-equiv=refresh content=0; URL=user.php>";
        }
      } else {
        echo "<div class='alert alert-danger' role='alert'>
        Falta algun campo que debes llenar!.
      </div>";
      }
    }
    $sqlventas = "SELECT *FROM detallesventa WHERE id_usuario='$id'";
    $ejecutaventas = mysqli_query($con, $sqlventas);
    foreach ($ejecutaventas as $venta) {
      $idlibro = $venta['id_libro'];
      $sqllibro = "SELECT *FROM libros WHERE id_libro='$idlibro'";
      $ejecutalibro = mysqli_query($con, $sqllibro);
      $filalibro = mysqli_fetch_array($ejecutalibro);
    ?>
      <div class="card" value="<?php echo $venta['id_venta']; ?>" style="width: 18rem; float: left;">
        <img src="<?php echo ($filalibro['ImagenLibro']); ?>" alt="">
        <div class="card-body">
          <p class="card-text">Nombre del libro:</p>
          <?php echo $filalibro['Titulo']; ?>
        </div>
        <form method="post" id="form_eliminar_<?php  echo $venta['id_venta']?>">
        <input type="hidden" name="eliminar" value="<?php echo $venta['id_venta'];?>" />
    <input type="submit" value="Eliminar" class="btn btn-danger btn-m"/>
        </form>
      </div>
    <?php
    }
    ?>
    </div>
<?php 
if(isset($_POST['eliminar'])){ //Eliminar Autor
  $idventa=$_POST['eliminar'];
  $con=mysqli_connect("localhost","root","","ebookshop");
  $sql2="DELETE FROM venta WHERE id_venta='$idventa'";
  if(mysqli_query($con,$sql2)){
  echo "<div class='alert alert-warning' role='alert'>
      Eliminado
    </div>";
  $con->close();
  echo "<meta http-equiv=refresh content=0;URL=user.php>";
  }
}
?>
    <!-- Footer bottom -->
    <div class="row align-items-center" style="clear:left;">
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

    </body>

    </html>
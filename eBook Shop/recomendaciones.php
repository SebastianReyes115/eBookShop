<section style="padding: 100px" class="new-product-area">
      <div class="container">
        <!-- Section tittle -->
        <div class="row">
          <div class="col-xl-12">
            <div class="section-tittle mb-70">
              <h2>Recomendaciones</h2>
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
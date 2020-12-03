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
            <div class="col-md-4 imagenes">
                <img class="tamañoImagen" src="Recursos/img/ElGato.png" />
            </div>
            <div class="col-md-4 tituloLibro">
                <h2>El gato negro</h2>

                <span class="autorEditorial"> AUTOR: </span><a class="autorEstilo" href=""> Edgar Allan Poe</a>
                <br>
                <span class="autorEditorial"> EDITORIAL: </span><a class="autorEstilo" href="">E-BOOKARAMA</a>
            </div>
            <div class="col-md-4 ContenedorPrecio">
                <span class="PriceTag"> Precio: $15 MXN </span>
                <div class="add_to_cart">
                    <br />
                    <a href="#" class="BotonAgregar" style="width: 200px;">Agregar al carrito</a>
                </div>
            </div>
        </div>
        <hr class="separador">
        <div>
            <div>
                <h2 class="headerproductos">Descripción</h2>
                <p class="descripcion">
                    El "gato negro" de Edgar Allan Poe entrega todos los elementos espeluznantes que hacen una historia aterradora y frecuentadora. Este cuento oscuro particular combina el miedo y la culpa con la brutalidad y la violencia, en última instancia, conduce al asesinato de la esposa del narrador. Sin embargo, también explora los temas de las profundidades de las fallas en el espíritu humano, incluyendo la lucha contra el alcoholismo, los peligros de la violencia doméstica y el juicio final que sigue a los más atroces de los pecados.
                </P>
                <br>
                <hr class="separador">

                <div>
                    <h2 class="headerproductos">Detalles del producto</h2>
                    <div class="detallesproducto">
                        <table class="plain centered">
                            <tbody>
                                <tr>
                                    <th>SKU: </th>
                                    <td>9788827576915</td>
                                </tr>
                                <tr>
                                    <th>Idioma:</th>
                                    <td>Español</td>
                                </tr>
                                <tr>
                                    <th>Año de publicación:</th>
                                    <td>22/02/2018</td>
                                </tr>
                                <tr>
                                    <th>Edición:</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>Páginas:</th>
                                    <td>19</td>
                                </tr>

                            </tbody>
                            <tbody>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>

        </div>

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
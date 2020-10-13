<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="../public/img/icon.png" type="image/png" />
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>eBookShop</title>
        <!-- Styles -->
        <link href="{{ asset( 'css/app.css' ) }}" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.3/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link href="{{ asset( 'css/styles.css' ) }}" rel="stylesheet">
    </head>
    <body>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">e-Book Shop</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Productos</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#">Contactanos</a>
                </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <a class="nav-link" href="/register">Identifícate</a>
                    <a class="nav-link" href="/register">Carrito</a>    
                    <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
                    <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Buscar</button>
                </form>
            </div>
        </nav>
        
        <br/>
        <div class="container">
            <div class="card">
                <div class="card-deck">
                    <div class="card" style="width: 80rem; padding: 50px;">
                        <br/>
                        <form>
                            <div class="form-group">
                                <label for="exampleFormControlInput0">e-Book Shop</label>
                                <br/>
                                <label for="exampleFormControlInput0">Si tienes alguna duda o incoformidad puedes ponerte en contacto con nosotros.</label>
                                <br/>
                                <label for="exampleFormControlInput1">Email address</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Escribenos tu duda</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="16"></textarea>
                            </div>
                            <button type="button" class="btn btn-dark">Enviar</button>
                        </form>
                        <br/>
                    </div>
                </div>
            </div>
        </div>
        <br/>

        <footer>
            <div class="contenedor-de-todo">
                <div class="contenedor">
                    <div class="columna1">
                        <h1>Mas informacion de la compañia</h1>
                        <p>Esta es una pagina dedicada a la venta de libros electronicos de su interes.
                        </p>
                    </div>
                    <div class="columna2">
                        <h1>Redes sociales</h1>
                        <div class="filas">
                            <img src="./././img/icon/facebook.webp" />
                            <label>Siguenos en Facebook</label>
                        </div>
                        <div class="filas">
                            <img src="./././img/icon/twitter.png" />
                            <label>Siguenos en Twitter</label>
                        </div>
                        <div class="filas">
                            <img src="./././img/icon/instagram.png" />
                            <label>Siguenos en Instagram</label>
                        </div>
                    </div>    
                    <div class="columna3">
                        <h1>informacion de contacto</h1>
                        <div class="filas2">
                            <img src="./././img/icon/casa.png" />
                            <label>Av.mi casa #123 </label>
                        </div>
                        <div class="filas2">
                            <img src="./././img/icon/telefono.png" />
                            <label> +52 449 123 45 67</label>
                        </div>
                        <div class="filas2">
                            <img src="./././img/icon/contacto.png" />
                            <label>eBookShop@hotmail.com</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contenedor-footer">
                <div class="footer">       
                    <div class="copyright">
                        2020 Todos los derechos reservados | <a href="">eBookShop</a>
                    </div>
                    <div class="informacion">
                        <a href="">Informacion de compañia|</a>
                        <a href="">Privacion y politicas|</a>
                        <a href="">Terminos y condiciones</a>
                    </div>
                </div>
            </div>
        </footer>
        <div id="app"></div>
        <script src="{{ asset( 'js/nose.js' ) }}"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.3/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </body>
</html>

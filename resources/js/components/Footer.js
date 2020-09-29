import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class Footer extends Component {
    render () {
        return (
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
        )
    }
}

if (document.getElementById('footer')) {
    ReactDOM.render(<Footer />, document.getElementById('footer'));
}
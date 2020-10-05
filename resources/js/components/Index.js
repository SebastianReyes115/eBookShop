import React , { Component } from 'react';
import ReactDOM from 'react-dom';
import { BrowserRouter, Route, Switch, Link } from 'react-router-dom'
import { Button } from 'react-bootstrap'
import Navbarindex from './Navbar'
import Footer from './Footer'
import CarouselMain from "./Carousel";
import Deals from './Ofertas'
import Libros from "./Libros";

class App extends Component {
    render() {
        return (
            <BrowserRouter>
                <Navbarindex />
                <br/>
                <CarouselMain />
                <br/>
                <h2 className="title_destacados">Libros Destacados</h2>
                <br/>
                <Libros/>
                <br/>
                <Footer />
            </BrowserRouter>
        )
    }
}

ReactDOM.render(<App />, document.getElementById('app'))

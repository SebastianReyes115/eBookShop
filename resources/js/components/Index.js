import React , { Component } from 'react';
import ReactDOM from 'react-dom';
import { BrowserRouter, Route, Switch, Link } from 'react-router-dom'
import { Button } from 'react-bootstrap'
import Navbarindex from './Navbar'
import Footer from './Footer'
import CarouselMain from "./Carousel";
import Deals from './Ofertas'

class App extends Component {
    render() {
        return (
            <BrowserRouter>
                
                <Navbarindex />
                
                <br/>
                
                <Button variant="outline-info" size="lg" disabled block className="titulouno">
                    New Books
                </Button>{' '}

                <br/>
                
                <CarouselMain />
                
                <br/>

                <Deals />
                
                <br/>
                
                <Footer />

            </BrowserRouter>
        )
    }
}

ReactDOM.render(<App />, document.getElementById('app'))

import React , { Component } from 'react';
import ReactDOM from 'react-dom';
import { BrowserRouter, Route, Switch, Link } from 'react-router-dom'
import Navbarindex from './Navbar'
import Index from './Index'
import Footer from './Footer'
import CarouselMain from "./Carousel";

class App extends Component {
    render() {
        return (
            <BrowserRouter>
                <Navbarindex />
                <CarouselMain />
                <Footer />
            </BrowserRouter>
        )
    }
}

ReactDOM.render(<App />, document.getElementById('app'))

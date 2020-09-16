import React , { Component } from 'react';
import ReactDOM from 'react-dom';
import { BrowserRouter, Route, Switch, Link } from 'react-router-dom'
import CarouselMain from './Carousel'
import NavbarMain from './Navbar'

class App extends Component {
    render() {
        return (
            <BrowserRouter>
                <NavbarMain />
                <CarouselMain />
            </BrowserRouter>
        )
    }
}

ReactDOM.render(<App />, document.getElementById('app'))

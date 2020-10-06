import React , { Component } from 'react';
import ReactDOM from 'react-dom';
import { BrowserRouter, Route, Switch, Link } from 'react-router-dom'
import Navbarindex from './Navbar'
import Footer from './Footer'

class Registro extends Component {
    render() {
        return (
            <h1>hola</h1>
        )
    }
}

if (document.getElementById('registro')) {
    ReactDOM.render(<Registro />, document.getElementById('registro'));
}

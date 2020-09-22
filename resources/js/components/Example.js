import React , { Component } from 'react';
import ReactDOM from 'react-dom';
import { BrowserRouter, Route, Switch, Link } from 'react-router-dom'
import Navbarindex from './Navbar'
import Index from './Index'

class App extends Component {
    render() {
        return (
            <BrowserRouter>
                <Navbarindex />
                <Index />
            </BrowserRouter>
        )
    }
}

ReactDOM.render(<App />, document.getElementById('app'))

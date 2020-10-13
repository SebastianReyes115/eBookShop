import React , { Component } from 'react';
import ReactDOM from 'react-dom';
import { BrowserRouter, Route, Switch, Link } from 'react-router-dom'
import { Navbar, Nav, Form, Button, FormControl} from 'react-bootstrap'

export default class Navbarindex extends Component {
    render() {
        return (
            <BrowserRouter>
                <Navbar bg="dark" sticky="top" variant="dark">
                    <Navbar.Brand href="/">e-Book Shop</Navbar.Brand>
                        <Nav className="mr-auto">
                            <Nav.Link href="/">Inicio</Nav.Link>
                            <Nav.Link href="#features">Productos</Nav.Link>
                            <Nav.Link href="/about">Contactanos</Nav.Link>
                        </Nav>
                        <Form inline>
                            <Nav.Link href="/register">Identifícate</Nav.Link>
                            <Nav.Link href="#home">Carrito</Nav.Link>
                            <FormControl type="text" placeholder="Buscar" className="mr-sm-2" />
                            <Button variant="outline-info">Buscar</Button>
                        </Form>
                </Navbar>
            </BrowserRouter>
        )
    }
}

if (document.getElementById('navbarindex')) {
    ReactDOM.render(<Navbarindex />, document.getElementById('navbarindex'));
}

import React , { Component } from 'react';
import ReactDOM from 'react-dom';
import { Navbar, Nav, Form, Button, FormControl} from 'react-bootstrap'

export default class Navbarindex extends Component {
    render() {
        return (
            <>
                <Navbar bg="dark" sticky="top" variant="dark">
                    <Navbar.Brand href="#home">e-Book Shop</Navbar.Brand>
                        <Nav className="mr-auto">
                            <Nav.Link href="#home">Inicio</Nav.Link>
                            <Nav.Link href="#features">Productos</Nav.Link>
                            <Nav.Link href="#pricing">Informacion</Nav.Link>
                        </Nav>
                        <Form inline>
                            <FormControl type="text" placeholder="Buscar" className="mr-sm-2" />
                            <Button variant="outline-info">Buscar</Button>
                        </Form>
                </Navbar>
            </>
        )
    }
}

if (document.getElementById('navbarindex')) {
    ReactDOM.render(<Navbarindex />, document.getElementById('navbarindex'));
}

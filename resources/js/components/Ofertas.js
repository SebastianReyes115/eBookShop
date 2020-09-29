import { BrowserRouter, Route, Switch, Link } from 'react-router-dom'
import React , { Component } from 'react'
import ReactDOM from 'react-dom'
import { Container, Row, Col, Image, Button } from 'react-bootstrap'

export default class Deals extends Component {
    render() {
        return (
            <BrowserRouter>
            <Button variant="outline-info" size="lg" disabled block className="titulouno">
                    Ofertas!
            </Button>{' '}
            <br/>
                <Container>
                    <Row>
                        <Col xs={6} md={3}>
                            <Image src="./././img/tokio.jpg" rounded />
                        </Col>
                        <Col xs={6} md={3}>
                            <Image src="./././img/artremisa.jpg" rounded />
                        </Col>
                        <Col xs={6} md={3}>
                            <Image
                                src="./././img/HP.jpg" rounded />
                        </Col>
                        <Col xs={6} md={3}>
                            <Image src="./././img/teoria del todo.jpg" rounded />
                        </Col>
                    </Row>
                    <br />
                    <Row>
                        <Col xs={6} md={3}>
                            <Button size="lg" block variant="info">
                                Tokio Blues
                            </Button>{" "}
                        </Col>
                        <Col xs={6} md={3}>
                            <Button size="lg" block variant="info">
                                Artremisa
                            </Button>{" "}
                        </Col>
                        <Col xs={6} md={3}>
                            <Button size="lg" block variant="info">
                                Harry Potter y la Piedra Filosofal
                            </Button>{" "}
                        </Col>
                        <Col xs={6} md={3}>
                            <Button size="lg" block variant="info">
                                La Teoria del Todo
                            </Button>{" "}
                        </Col>
                    </Row>
                </Container>
            </BrowserRouter>
        )
    }
}

if (document.getElementById('deals')) {
    ReactDOM.render(<Deals />, document.getElementById('deals'));
}

import React , { Component } from 'react';
import ReactDOM from 'react-dom';
import CardDeck from 'react-bootstrap/CardDeck'
import Card from 'react-bootstrap/Card'
import {Button, Container} from "react-bootstrap";
import {BrowserRouter, Switch, Route} from "react-router-dom";

export default class Libros extends Component {
    render() {
        return (
            <BrowserRouter>
                <Container>
                    <CardDeck>
                        <Card>
                            <Card.Img variant="top" src="./././img/tokio.jpg" />
                            <Card.Body>
                                <Card.Title>Tokio Blues</Card.Title>
                                <Card.Text class="text-justify">
                                    Es una novela del autor japonés Haruki Murakami del año 1987. La novela es una historia nostálgica que trata los temas de la pérdida y la sexualidad. La historia está narrada por su protagonista, Toru Watanabe, que evoca en la novela el tiempo en que residió en Tokio durante su primer año como estudiante universitario.
                                </Card.Text>
                            </Card.Body>
                            <Card.Footer>
                                <small className="text-muted">
                                    <Button variant="primary" href="/libro">Leer más</Button>
                                </small>
                            </Card.Footer>
                        </Card>
                        <Card>
                            <Card.Img variant="top" src="./././img/artremisa.jpg" />
                            <Card.Body>
                                <Card.Title>Artemisa</Card.Title>
                                <Card.Text class="text-justify">
                                    Es una novela de ciencia ficción de 2017 escrita por Andy Weir .La novela tiene lugar a finales de la década de 2080 y se desarrolla en Artemisa, la primera y hasta ahora única ciudad en la Luna.
                                </Card.Text>
                            </Card.Body>
                            <Card.Footer>
                                <small className="text-muted">
                                    <Button variant="primary">Leer más</Button>
                                </small>
                            </Card.Footer>

                        </Card>
                        <Card>
                            <Card.Img variant="top" src="./././img/HP.jpg" />
                            <Card.Body>
                                <Card.Title>Harry potter y la piedra filosofal</Card.Title>
                                <Card.Text class="text-justify">
                                    Harry vive con sus horribles tíos y el insoportable primo Dudley, hasta que su ingreso en el Colegio Hogwarts de Magia y Hechicería cambia su vida para siempre. Allí aprenderá trucos y encantamientos fabulosos, y hará un puñado de buenos amigos... aunque también algunos temibles enemigos.
                                </Card.Text>
                            </Card.Body>
                            <Card.Footer>
                                <small className="text-muted">
                                    <Button variant="primary">Leer más</Button>
                                </small>
                            </Card.Footer>

                        </Card>
                        <Card>
                            <Card.Img variant="top" src="./././img/teoria del todo.jpg" />
                            <Card.Body>
                                <Card.Title>La teoria del todo</Card.Title>
                                <Card.Text class="text-justify">
                                    En esta esclarecedora obra, el gran físico británico Stephen Hawking nos ofrece una historia del universo, del big bang a los agujeros negros. En siete pasos, Hawking logra explicar la historia del universo, desde las primeras teorías del mundo griego y de la época medieval hasta las más complejas teorías actuales, siempre con su característico tono didáctico y accesible a todos los públicos.
                                </Card.Text>
                            </Card.Body>
                            <Card.Footer>
                                <small className="text-muted">
                                    <Button variant="primary">Leer más</Button>
                                </small>
                            </Card.Footer>
                        </Card>
                    </CardDeck>
                </Container>
                <Switch>
                    <Route path="./libro">
                    </Route>
                </Switch>
            </BrowserRouter>
        )
    }
}

if (document.getElementById('Libros')) {
    ReactDOM.render(<Libros />, document.getElementById('Libros'));
}


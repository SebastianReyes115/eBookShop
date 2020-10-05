import React , { Component } from 'react'
import ReactDOM from 'react-dom'
import { Carousel, Container, CardDeck, Card} from 'react-bootstrap'

export default class CarouselMain extends Component {
    render() {
        return (
            <Container>
            <CardDeck>
                <Card>
            <Carousel>
                <Carousel.Item>
                    <img
                        className="d-block w-100"
                        src="./././img/carousel3.png"
                        alt="First slide"
                    />
                    <Carousel.Caption>
                       <a>
                           <h3 className="textoNegro">Preordena aquí</h3>
                       </a>

                    </Carousel.Caption>
                </Carousel.Item>
                <Carousel.Item>
                    <img
                        className="d-block w-100"
                        src="./././img/carousel2.png"
                        alt="Third slide"
                    />

                    <Carousel.Caption>
                        <h3>

                        </h3>

                    </Carousel.Caption>
                </Carousel.Item>
                <Carousel.Item>
                    <img
                        className="d-block w-100"
                        src="./././img/carousel11.png"
                        alt="Third slide"
                    />

                    <Carousel.Caption>
                    <a>
                        <h3>Más Información</h3>
                    </a>
                    </Carousel.Caption>
                </Carousel.Item>
            </Carousel>
            </Card>
                </CardDeck>
            </Container>
        )
    }
}

if (document.getElementById('carouselmain')) {
    ReactDOM.render(<CarouselMain />, document.getElementById('carouselmain'));
}

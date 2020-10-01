import React , { Component } from 'react'
import ReactDOM from 'react-dom'
import Carousel from 'react-bootstrap/Carousel'

export default class CarouselMain extends Component {
    render() {
        return (
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
        )
    }
}

if (document.getElementById('carouselmain')) {
    ReactDOM.render(<CarouselMain />, document.getElementById('carouselmain'));
}

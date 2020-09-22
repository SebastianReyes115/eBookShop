import React , { Component } from 'react';
import ReactDOM from 'react-dom';
import { Carousel } from 'react-bootstrap'

export default class Index extends Component {
    render() {
        return (
            <div class="container">
                <div class="row">
                    <div class="col-sm-9 col-md-20 col-lg-50 mx-auto">
                        <div class="card card-signin my-10">
                            <div class="card-body">
                                <Carousel>
                                    <Carousel.Item>
                                        <img
                                        className="d-block w-100"
                                        src="./././img/el perro.jpg"
                                        alt="First slide"
                                        />
                                        <Carousel.Caption>
                                        <h3>First slide label</h3>
                                        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                                        </Carousel.Caption>
                                    </Carousel.Item>
                                    <Carousel.Item>
                                        <img
                                        className="d-block w-100"
                                        src="holder.js/800x400?text=Second slide&bg=282c34"
                                        alt="Third slide"
                                        />

                                        <Carousel.Caption>
                                        <h3>Second slide label</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </Carousel.Caption>
                                    </Carousel.Item>
                                    <Carousel.Item>
                                        <img
                                        className="d-block w-100"
                                        src="holder.js/800x400?text=Third slide&bg=20232a"
                                        alt="Third slide"
                                        />
                                        <Carousel.Caption>
                                        <h3>Third slide label</h3>
                                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                                        </Carousel.Caption>
                                    </Carousel.Item>
                                </Carousel>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        )
    }
}

if (document.getElementById('index')) {
    ReactDOM.render(<Index />, document.getElementById('index'));
}

import React, {Component} from 'react';

class Technologies extends Component {
    render() {
        return (
            <section className="technologies" id="technologies">
                <div className="container text-center">
                    <h2 className="text-center">
                        Технологии
                    </h2>
                    <div className="row">
                        <div className="col-lg-2">
                            <img src="../../images/technologies/symfony.png"/>
                        </div>
                        <div className="col-lg-2">
                            <img src="../../images/technologies/magento.png"/>
                        </div>
                        <div className="col-lg-2">
                            <img src="../../images/technologies/shopify.png"/>
                        </div>
                        <div className="col-lg-2">
                            <img src="../../images/technologies/github.png"/>
                        </div>
                        <div className="col-lg-2">
                            <img src="../../images/technologies/digital-ocean.png"/>
                        </div>
                        <div className="col-lg-2">
                            <img src="../../images/technologies/docker.png"/>
                        </div>
                    </div>
                </div>
            </section>
        )
    }
}

export default Technologies

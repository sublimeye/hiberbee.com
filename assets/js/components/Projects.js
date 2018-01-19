import React, {Component} from 'react';

class Projects extends Component {
    render() {
        return (
            <div>
                <div className="container text-center">
                    <h2>
                        Наши проекты
                    </h2>
                </div>
                <div className="project-grid">
                    <div className="row">

                        <div className="col-lg-3 col-sm-6 col-xs-12">
                            <div className="card card-block">
                                <img alt="" src="../../images/consulting.jpg"/>
                                <div className="project-over">
                                    <div>
                                        <h3 className="card-title">
                                            Воркшоп
                                        </h3>
                                        <p className="card-text">
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div className="col-lg-3 col-sm-6 col-xs-12">
                            <div className="card card-block">
                                <img alt="" src="../../images/architecture.png"/>
                                <div className="project-over">
                                    <div>
                                        <h3 className="card-title">
                                            Разработка системной архитектуры
                                        </h3>
                                        <p className="card-text">
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div className="col-lg-3 col-sm-6 col-xs-12">
                            <div className="card card-block">
                                <img alt="" src="../../images/university.jpg"/>
                                <div className="project-over">
                                    <div>
                                        <h3 className="card-title">
                                            Обучение в Bionic University
                                        </h3>
                                        <p className="card-text">
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div className="col-lg-3 col-sm-6 col-xs-12">
                            <div className="card card-block">
                                <img alt="" src="../../images/internet_shop.png"/>
                                <div className="project-over">
                                    <div>
                                        <h3 className="card-title">
                                            Интернет-магазин
                                        </h3>
                                        <p className="card-text">
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        )
    }
}

export default Projects

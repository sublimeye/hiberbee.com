import React, {Component} from 'react';

class Footer extends Component {
    render() {
        return (
            <div className="bottom">
                <div className="container">
                    <div className="row">
                        <div className="col-lg-1 col-xs-1 text-lg-left text-center">
                            <nav className="nav social-nav pull-left">
                                <a href="https://facebook.com/hiberbee/" target="_blank">
                                    <i className="fa fa-facebook"/>
                                </a>
                                <a href="https://www.linkedin.com/company/27153552/" target="_blank">
                                    <i className="fa fa-linkedin"/>
                                </a>
                            </nav>
                        </div>
                        <div className="col-lg-11 col-xs-11 text-lg-right text-center">
                            <ul className="list-inline">
                                <li className="list-inline-item">
                                    <a href="#">Главная</a>
                                </li>
                                <li className="list-inline-item">
                                    <a href="#about">О компании</a>
                                </li>
                                <li className="list-inline-item">
                                    <a href="#process">Процесс</a>
                                </li>
                                <li className="list-inline-item">
                                    <a href="#service_catalog">Сервис-каталог</a>
                                </li>
                                <li className="list-inline-item">
                                    <a href="#projects">Наши проекты</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        )
    }
}

export default Footer

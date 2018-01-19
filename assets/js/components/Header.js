import React, {Component} from 'react';

class Header extends Component {
    render() {
        return (
            <div className="container">
                <div id="logo" className="pull-left">
                    <h1><a href=""><img src={require("../../images/logo.png")}/></a></h1>
                </div>
                <nav id="nav-menu-container">
                    <ul className="nav-menu">
                        <li><a href="#about">О компании</a></li>
                        <li><a href="#process">Процесс</a></li>
                        <li><a href="#service_catalog">Сервис-каталог</a></li>
                        <li><a href="#projects">Наши проекты</a></li>
                        <li><a href="#technologies">Технологии</a></li>
                    </ul>
                </nav>
            </div>
        )
    }
}

export default Header


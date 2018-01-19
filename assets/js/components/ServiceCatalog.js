import React, {Component} from 'react';

class ServiceCatalog extends Component {
    render() {
        return (
            <div className="container">
                <h2 className="text-center">
                    Сервис-каталог
                </h2>
                <div className="row">
                    <div className="feature-col col-lg-6 col-xs-12">
                        <div className="card card-block text-center">
                            <div>
                                <div className="feature-icon">
                                    <span className="fa fa-line-chart"/>
                                </div>
                            </div>

                            <div>
                                <h3>Консалтинг</h3>
                                <p>
                                    Накопился технический долг? Не знаете, как масштабировать проект? Падает
                                    продуктивность
                                    команды разработчиков? Мы проведем диагностику, найдем решение и поможем
                                    имплементировать
                                    его.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div className="feature-col col-lg-6 col-xs-12">
                        <div className="card card-block text-center">
                            <div>
                                <div className="feature-icon">
                                    <span className="fa fa-database"/>
                                </div>
                            </div>

                            <div>
                                <h3>Разработка</h3>
                                <p>
                                    Создание сайта или веб-приложения - не всегда долгосрочный процесс. Мы можем начать
                                    с
                                    прототипа, найти коробочное решение, подобрать шаблон или просто устроить хакатон
                                    24/7 и
                                    напрограммировать то, что вам нужно
                                </p>
                            </div>
                        </div>
                    </div>
                    <div className="feature-col col-lg-6 col-xs-12">
                        <div className="card card-block text-center">
                            <div>
                                <div className="feature-icon">
                                    <span className="fa fa-graduation-cap"/>
                                </div>
                            </div>

                            <div>
                                <h3>
                                    Обучение
                                </h3>
                                <p>Персональные и групповые программы для повышения квалификации и новых знаний о
                                    разработке,
                                    языках програмирования, методологиях разработки и системной архитектуре</p>
                            </div>
                        </div>
                    </div>
                    <div className="feature-col col-lg-6 col-xs-12">
                        <div className="card card-block text-center">
                            <div>
                                <div className="feature-icon">
                                    <span className="fa fa-dropbox"/>
                                </div>
                            </div>
                            <div>
                                <h3>Поддержка и миграция</h3>
                                <p>Не нужно быть заложником своего провайдера IT услуг. Если вы недовольны качеством
                                    разработки или поддержки, мы поможем собрать все вещи, аккуратно перенести и
                                    поддерживать в
                                    порядке.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        )
    }
}

export default ServiceCatalog

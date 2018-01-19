import React, {Component} from 'react';

class Process extends Component {
    render() {
        return (
            <div className="container">
                <h2 className="text-center">Процесс</h2>
                <h3>Разработка</h3>
                <div className="row bs-wizard development_flow">
                    <div className="col-sm bs-wizard-step complete">
                        <div className="text-center bs-wizard-stepnum"><h6>Планирование</h6></div>
                        <div className="progress">
                            <div className="progress-bar"/>
                        </div>
                        <div className="bs-wizard-dot"/>
                        <p className="bs-wizard-info text-center">
                        </p>
                    </div>
                    <div className="col-sm bs-wizard-step complete">
                        <div className="text-center bs-wizard-stepnum"><h6>Разработка</h6></div>
                        <div className="progress">
                            <div className="progress-bar"/>
                        </div>
                        <div className="bs-wizard-dot"/>
                        <p className="bs-wizard-info text-center">
                        </p>
                    </div>
                    <div className="col-sm bs-wizard-step complete">
                        <div className="text-center bs-wizard-stepnum"><h6>Презентация</h6></div>
                        <div className="progress">
                            <div className="progress-bar"/>
                        </div>
                        <div className="bs-wizard-dot"/>
                        <p className="bs-wizard-info text-center">
                        </p>
                    </div>
                    <div className="col-sm bs-wizard-step complete">
                        <div className="text-center bs-wizard-stepnum"><h6>Передача артефактов</h6></div>
                        <div className="progress">
                            <div className="progress-bar"/>
                        </div>
                        <div className="bs-wizard-dot"/>
                        <p className="bs-wizard-info text-center">
                        </p>
                    </div>
                    <div className="col-sm bs-wizard-step complete">
                        <div className="text-center bs-wizard-stepnum"><h6>Обратная связь</h6></div>
                        <div className="progress">
                            <div className="progress-bar"/>
                        </div>
                        <div className="bs-wizard-dot"/>
                        <p className="bs-wizard-info text-center">
                        </p>
                    </div>
                    <div className="col-sm bs-wizard-step complete">
                        <div className="text-center bs-wizard-stepnum"><h6>Сопровождение</h6></div>
                        <div className="progress">
                            <div className="progress-bar"/>
                        </div>
                        <div className="bs-wizard-dot"/>
                        <p className="bs-wizard-info text-center">
                        </p>
                    </div>
                </div>
                <h3>Консалтинг</h3>
                <div className="row bs-wizard consulting_flow">
                    <div className="col-sm bs-wizard-step complete">
                        <div className="text-center bs-wizard-stepnum"><h6>Воркшоп</h6></div>
                        <div className="progress">
                            <div className="progress-bar"/>
                        </div>
                        <div className="bs-wizard-dot"/>
                        <p className="bs-wizard-info text-center">
                            <i className="fa fa-clock-o" aria-hidden="true"/> от 4 до 16 часов<br/>
                        </p>
                    </div>
                    <div className="col-sm bs-wizard-step complete">
                        <div className="text-center bs-wizard-stepnum"><h6>Разработка решения</h6></div>
                        <div className="progress">
                            <div className="progress-bar"/>
                        </div>
                        <div className="bs-wizard-dot"/>
                        <p className="bs-wizard-info text-center">
                            <i className="fa fa-clock-o" aria-hidden="true"/> от 1 до 5 дней<br/>

                        </p>
                    </div>
                    <div className="col-sm bs-wizard-step complete">
                        <div className="text-center bs-wizard-stepnum"><h6>Презентация</h6></div>
                        <div className="progress">
                            <div className="progress-bar"/>
                        </div>
                        <div className="bs-wizard-dot"/>
                        <p className="bs-wizard-info text-center"><i className="fa fa-clock-o" aria-hidden="true"/> 1
                            час<br/>

                        </p>
                    </div>
                    <div className="col-sm bs-wizard-step complete">
                        <div className="text-center bs-wizard-stepnum"><h6>Ретроспектива внедрения</h6></div>
                        <div className="progress">
                            <div className="progress-bar"/>
                        </div>
                        <div className="bs-wizard-dot"/>
                        <p className="bs-wizard-info text-center">
                            <i className="fa fa-clock-o" aria-hidden="true"/> от 2 до 4 часов<br/>
                        </p>
                    </div>
                </div>
            </div>
        )
    }
}

export default Process

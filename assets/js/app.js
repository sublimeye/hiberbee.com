import React from 'react';
import ReactDOM from 'react-dom';
import Header from './components/Header';
import About from './components/About';
import Process from './components/Process';
import ServiceCatalog from './components/ServiceCatalog';
import Projects from './components/Projects';
import Technologies from './components/Technologies';
import Footer from './components/Footer';
import ReactGA from 'react-ga'

ReactDOM.render(<Header/>, document.getElementById('header'));
ReactDOM.render(<About/>, document.getElementById('about'));
ReactDOM.render(<Process/>, document.getElementById('process'));
ReactDOM.render(<ServiceCatalog/>, document.getElementById('service_catalog'));
ReactDOM.render(<Projects/>, document.getElementById('projects'));
ReactDOM.render(<Technologies/>, document.getElementById('technologies'));
ReactDOM.render(<Footer/>, document.getElementById('footer'));

ReactGA.initialize('UA-111095351-1');



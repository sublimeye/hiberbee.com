let Encore = require('@symfony/webpack-encore');

Encore
    .setOutputPath('public/build/')
    .setPublicPath('/build')
    .cleanupOutputBeforeBuild()
    .autoProvidejQuery()
    .enableSassLoader()
    .enableVersioning(false)
    .createSharedEntry('js/common', ['jquery'])
    .addEntry('js/app', './assets/js/app.js')
    .addEntry('js/admin', './assets/js/admin.js')
    .addStyleEntry('css/app', ['./assets/scss/app.scss'])
;

module.exports = Encore.getWebpackConfig();

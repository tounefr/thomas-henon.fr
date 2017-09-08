var Encore = require('@symfony/webpack-encore');
var requireAssetsHelper = require("encore-require-assets-helper");

requireAssetsHelper(
    "./web/front/assets/images/*.{jpg,jpeg,png,gif,svg,ico}",
    "./web/front/assets/js/assets.js",
    "./web/front/assets/",
    "../"
);

Encore
// directory where all compiled assets will be stored
    .setOutputPath('web/build/')

    // what's the public path to this directory (relative to your project's document root dir)
    .setPublicPath('/build')

    // empty the outputPath dir before each build
    .cleanupOutputBeforeBuild()

    // allow legacy applications to use $/jQuery as a global variable
    .autoProvidejQuery()


    // will output as web/build/app.js
    .addEntry('app', './web/front/main.js')

    // will output as web/build/global.css
    .addStyleEntry('global', './web/front/assets/css/global.scss')

    // allow sass/scss files to be processed
//    .enableSassLoader()

    .enableSassLoader(function(sassOptions) {}, {
        resolve_url_loader: false
    })

    .enableSourceMaps(!Encore.isProduction())

/*    .addLoader({
        test: /\.(jpg|png)$/,
        loader: 'file',
        include: './web/assets/images'
    })
*/

// create hashed filenames (e.g. app.abc123.css)
    .enableVersioning()
;

// export the final configuration
module.exports = Encore.getWebpackConfig();


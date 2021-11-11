const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'js/custom.js')
    .scripts([ 
        'node_modules/uikit/dist/js/uikit.min.js',
        'node_modules/uikit/dist/js/uikit-icons.min.js',
        'public/js/custom.js'
    ], 'public/js/main.js')
    .sass('resources/scss/main.scss', 'css/custom.css')
    .styles([
        'node_modules/uikit/dist/css/uikit.min.css',
        'public/css/custom.css'
    ], 'public/css/main.css')
    .version();

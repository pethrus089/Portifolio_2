const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix


.scripts('node_modules/bootstrap/dist/js/bootstrap.js' , 'public/javaScript/geral/bootstrap.js')
.scripts('node_modules/bootstrap/dist/js/bootstrap.bundle.min.js' , 'public/javaScript/geral/bootstrap.min.js')
.scripts('node_modules/bootstrap/dist/css/bootstrap.css' , 'public/css/geral/bootstrap.css')
.scripts('node_modules/bootstrap/dist/css/bootstrap.css.map' , 'public/css/geral/bootstrap.css.map')
.scripts('node_modules/bootstrap/dist/css/bootstrap.min.css' , 'public/css/geral/bootstrap.min.css')
.scripts('node_modules/bootstrap/dist/css/bootstrap.min.css.map' , 'public/css/geral/bootstrap.min.css.map')


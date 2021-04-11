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

mix.js('resources/js/app.js', 'public/js')
    .vue()
    .sass('resources/sass/app.scss', 'public/css');

mix.css('node_modules/toastr/build/toastr.min.css', 'public/css/library');

mix.scripts([
    'node_modules/toastr/build/toastr.min.js'
], 'public/js/library/library.js');

mix.scripts([
    'resources/js/Chart.js'
], 'public/js/library/Chart.js');

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
    .js('resources/js/calender.js', 'public/js')
    .js('resources/js/plan.js', 'public/js')
    .js('resources/js/reservation.js', 'public/js')
    .js('resources/js/calender.min.js', 'public/js')
    .js('resources/js/admin_calender.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/media/calender.scss', 'public/css/media')
    .sass('resources/sass/PC/calender.scss', 'public/css/PC')
    .sass('resources/sass/admin.scss', 'public/css');

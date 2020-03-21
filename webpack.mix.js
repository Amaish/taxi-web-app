let mix = require('laravel-mix');

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

mix.styles([
    'resources/assets/css/bootstrap.min.css',
    'resources/assets/css/metismenu.min.css',
    'resources/assets/css/icons.css',
    'resources/assets/css/dataTables.bootstrap4.min.css',
    'resources/assets/css/buttons.bootstrap4.min.css',
    'resources/assets/css/bootstrap-datepicker.min',
    'resources/assets/css/sweetalert2.min.css',
    'resources/assets/css/toastr.min.css',
    'resources/assets/css/style.css',
    'resources/assets/css/custom.css',
], 'public/css/app.css');

mix.scripts([
    'resources/assets/js/jquery-3.3.1.min.js',
    'resources/assets/js/bootstrap.bundle.min.js',
    'resources/assets/js/metisMenu.min.js',
    'resources/assets/js/jquery.slimscroll.js',
    'resources/assets/js/waves.min.js',
    'resources/assets/js/jquery.validate.min.js',
    'resources/assets/js/additional-methods.js',
    'resources/assets/js/jquery.dataTables.min.js',
    'resources/assets/js/dataTables.bootstrap4.min.js',
    'resources/assets/js/bootstrap-datepicker.js',
    'resources/assets/js/select2.min.js',
    'resources/assets/js/toastr.min.js',
    'resources/assets/js/jquery-ui.min.js',
    'resources/assets/js/app.js'
],'public/js/all.js');

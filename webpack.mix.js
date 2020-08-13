const { mix } = require('laravel-mix');

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

mix.js('resources/assets/js/libs/bootstrap.js', 'public/js')
    .js('resources/assets/js/libs/bootstrap.min.js', 'public/js')
    .js('resources/assets/js/libs/jquery.js', 'public/js')
    .js('resources/assets/js/libs/metisMenu.js', 'public/js')
    .js('resources/assets/js/libs/sb-admin-2.js', 'public/js')
    .js('resources/assets/js/libs/scripts.js', 'public/js');


mix.combine([
    'resources/assets/css/libs/blog-post.css',
    'resources/assets/css/libs/bootstrap.css',
    'resources/assets/css/libs/bootstrap.min.cs',
    'resources/assets/css/libs/font-awesome.css',
    'resources/assets/css/libs/metisMenu.css',
    'resources/assets/css/libs/sb-admin-2.css',
    'resources/assets/css/libs/styles.css',
    'resources/assets/sass/app.scss'
], 'public/css/app.css');


// mix.styles('resources/assets/css/libs/blog-post.css', 'public/css')
//     .styles('resources/assets/css/libs/bootstrap.css', 'public/css')
//     .styles('resources/assets/css/libs/bootstrap.min.css', 'public/css')
//     .styles('resources/assets/css/libs/font-awesome.css', 'public/css')
//     .styles('resources/assets/css/libs/metisMenu.css', 'public/css')
//     .styles('resources/assets/css/libs/sb-admin-2.css', 'public/css')
//     .styles('resources/assets/css/libs/styles.css', 'public/css');
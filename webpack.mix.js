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

mix
    .browserSync('dashboard.test')
    .disableSuccessNotifications()
    .sass('resources/scss/theme.scss', 'public/css').version()
    .js('resources/js/theme.js', 'public/js').version()
    .options({
        processCssUrls: false
    })

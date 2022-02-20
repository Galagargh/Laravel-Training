const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------

 */

mix.copyDirectory('resources/fonts', 'public/fonts');
mix.copyDirectory('resources/img', 'public/img');

mix.js('resources/js/app.js', 'public/js')
    .vue()
    .sass('resources/sass/app.scss', 'public/css')
    .options({
        processCssUrls: false,
        postCss: [ tailwindcss('./tailwind.config.js') ],
    })

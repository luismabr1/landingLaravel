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

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
<<<<<<< HEAD
        require('postcss-import'),
        require('tailwindcss'),
    ]);
=======
<<<<<<< HEAD
        //
    ]);
=======
        require('postcss-import'),
        require('tailwindcss'),
    ]);
>>>>>>> 789919b299d9bb64c87434613a9466ad7de747e1

if (mix.inProduction()) {
    mix.version();
}
<<<<<<< HEAD
=======
>>>>>>> pruebas
>>>>>>> 789919b299d9bb64c87434613a9466ad7de747e1

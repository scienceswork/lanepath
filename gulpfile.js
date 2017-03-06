const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application as well as publishing vendor resources.
 |
 */

elixir((mix) => {
    mix
        .copy([
            'resources/assets/lib/jquery/dist'
        ], 'public/lib/jquery')
        .copy([
            'resources/assets/lib/zui/dist'
        ], 'public/lib/jquery')
        .sass([
            'resources/assets/sass/main.scss'
        ], 'public/css/main.css')
        .scripts([
            'resources/assets/js/main.js'
        ], 'public/js/main.js');
    ;
});

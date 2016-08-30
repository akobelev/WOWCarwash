const elixir = require('laravel-elixir');

require('laravel-elixir-vue');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function (mix) {
    mix.sass('app.scss')
        .webpack('bootstrap.js', 'public/js/script.js')
        .webpack('app.js', 'public/js/app.js')
        .version([
            'css/app.css',
            'js/script.js',
            'js/app.js'
        ])
        .copy('node_modules/font-awesome/fonts', 'public/build/fonts');
});


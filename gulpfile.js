var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.styles([
		'vendor/css/bootstrap.min.css',
		'vendor/css/font-awesome.min.css',
		'css/main.css'
	],'public/output/final.css','resources/assets');
	mix.scripts([
		'vendor/js/jquery.min.js',
		'vendor/js/bootstrap.min.js',
		'vendor/js/jquery.dropotron.min.js',
		'js/main.js'
	],'public/output/final.js','resources/assets');
	mix.copy('resources/assets/img','public/img');
	mix.copy('resources/assets/fonts','public/fonts')
});

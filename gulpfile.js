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
		'vendor/css/iconmoon.css',
		'vendor/css/jquery.tosrus.all.css',
		'css/main.css'
	],'public/output/final.css','resources/assets');
	mix.styles([
		'vendor/css/bootstrap.min.css',
		'vendor/css/metisMenu.css',
		'vendor/css/morris.css',
		'vendor/css/font-awesome.min.css',
		'vendor/css/sb-admin-2.css',
		'vendor/css/jquery.dataTables.min.css',
		'vendor/css/dataTables.responsive.css',
		'vendor/css/basic.min.css',
		'vendor/css/dropzone.min.css',
		'css/back-end.css'
	],'public/output/back.css','resources/assets');
	mix.scripts([
		'vendor/js/jquery.min.js',
		'vendor/js/bootstrap.min.js',
		'vendor/js/jquery.tosrus.min.all.js',
		'vendor/js/hammer.min.js',
		'js/main.js'
	],'public/output/final.js','resources/assets');
	mix.scripts([
		'vendor/js/jquery.min.js',
		'vendor/js/bootstrap.min.js',
		'vendor/js/metisMenu.js',
		'vendor/js/sb-admin-2.js',
		'vendor/js/jquery.dataTables.min.js',
		'vendor/js/dataTables.responsive.js',
		'vendor/js/dropzone.js',
		'js/back-end.js'
	],'public/output/back.js','resources/assets');
	mix.copy('resources/assets/img','public/img');
	mix.copy('resources/assets/fonts','public/fonts')
});

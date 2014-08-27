<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Supporting links posted to the previous version of the website

Route::get('{view}.html', function ($view) {

	switch($view) {
		case 'index': return Redirect::to('/');
			break;
		case 'getting-started': return Redirect::to('installation');
			break;
		case 'html-guide': return Redirect::to('templating');
			break;
		case 'css-guide': return Redirect::to('sass-setup');
			break;
		case 'js-guide': return Redirect::to('js-setup');
			break;
		case 'changelog': return Redirect::to('changelog');
			break;
		case 'upgrading': return Redirect::to('upgrading-guide');
			break;
	}
});

// New site routes

Route::get('/', function () {
	return View::make('index')->with('view', 'index');
});

Route::get('installation', function () {
	return View::make('installation')->with('view', 'installation');
});

Route::get('new-project', function () {
	return View::make('new-project')->with('view', 'new-project');
});

Route::get('building', function () {
	return View::make('building')->with('view', 'building');
});

Route::get('extra-services', function () {
	return View::make('extra-services')->with('view', 'extra-services');
});

Route::get('base-setup', function () {
	return View::make('base-setup')->with('view', 'base-setup');
});

Route::get('templating', function () {
	return View::make('templating')->with('view', 'templating');
});

Route::get('asset-conventions', function () {
	return View::make('asset-conventions')->with('view', 'asset-conventions');
});

Route::get('sass-setup', function () {
	return View::make('sass-setup')->with('view', 'sass-setup');
});

Route::get('js-setup', function () {
	return View::make('js-setup')->with('view', 'js-setup');
});

Route::get('back-end-integration', function () {
	return View::make('back-end-integration')->with('view', 'back-end-integration');
});

Route::get('boilerplate-changelog', function () {
	return View::make('boilerplate-changelog')->with('view', 'boilerplate-changelog');
});

Route::get('upgrading-guide', function () {
	return View::make('upgrading-guide')->with('view', 'upgrading-guide');
});

Route::get('changelog', function () {
	return View::make('changelog')->with('view', 'changelog');
});

Route::get('roadmap', function () {
	return View::make('roadmap')->with('view', 'roadmap');
});
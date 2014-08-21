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

Route::get('/', function()
{
	return View::make('index');
});
Route::get('installation', function()
{
	return View::make('installation');
});
Route::get('new-project', function()
{
	return View::make('new-project');
});
Route::get('building', function()
{
	return View::make('building');
});
Route::get('extra-services', function()
{
	return View::make('extra-services');
});
Route::get('base-setup', function()
{
	return View::make('base-setup');
});
Route::get('templating', function()
{
	return View::make('templating');
});
Route::get('asset-conventions', function()
{
	return View::make('asset-conventions');
});
Route::get('sass-setup', function()
{
	return View::make('sass-setup');
});
Route::get('js-setup', function()
{
	return View::make('js-setup');
});
Route::get('back-end-integration', function()
{
	return View::make('back-end-integration');
});
Route::get('boilerplate-changelog', function()
{
	return View::make('boilerplate-changelog');
});
Route::get('upgrading-guide', function()
{
	return View::make('upgrading-guide');
});
Route::get('changelog', function()
{
	return View::make('changelog');
});
Route::get('roadmap', function()
{
	return View::make('roadmap');
});
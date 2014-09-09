<?php

/*
|--------------------------------------------------------------------------
| Register The Laravel Class Loader
|--------------------------------------------------------------------------
|
| In addition to using Composer, you may use the Laravel class loader to
| load your controllers and models. This is useful for keeping all of
| your classes in the "global" namespace without Composer updating.
|
*/

use Illuminate\Database\QueryException;
use Illuminate\Session\TokenMismatchException;
use Illuminate\Support\Facades\Redirect;
use Intervention\Image\Exception\ImageNotWritableException;
use Intervention\Image\Exception\InvalidImageTypeException;
use Laracasts\Validation\FormValidationException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

ClassLoader::addDirectories(array(

	app_path().'/commands',
	app_path().'/controllers',
	app_path().'/models',
	app_path().'/database/seeds',

));

/*
|--------------------------------------------------------------------------
| Application Error Logger
|--------------------------------------------------------------------------
|
| Here we will configure the error logger setup for the application which
| is built on top of the wonderful Monolog library. By default we will
| build a basic log file setup which creates a single file for logs.
|
*/

Log::useFiles(storage_path().'/logs/laravel.log');

/*
|--------------------------------------------------------------------------
| Application Error Handler
|--------------------------------------------------------------------------
|
| Here you may handle any errors that occur in your application, including
| logging them or displaying custom views for specific errors. You may
| even register several error handlers to handle different types of
| exceptions. If nothing is returned, the default error view is
| shown, which includes a detailed stack trace during debug.
|
*/

App::error(function(QueryException $exception)
{
    Log::error($exception);

//    return Redirect::to('/')->withDangerMessage('Sorry, there was an error, please try again later');
});

App::error(function(NotFoundHttpException $exception)
{
//    return Redirect::to('/')->withInfoMessage('That page doesn\'t exist');

    Log::error($exception);

});

//InvalidImageTypeException
//Wrong image type () only use JPG, PNG or GIF images.

App::error(function(InvalidImageTypeException $exception)
{
    return Redirect::back()->withDangerMessage('Wrong image type, please only use JPG, PNG or GIF images.');
});

App::error(function(ImageNotWritableException $exception)
{
    return Redirect::back()->withDangerMessage('The folder you want to store your image is not writable, please contact the Administrator');
});


App::error(function(FormValidationException $exception)
{
    Log::error($exception);

//    return Redirect::back()->withErrors($exception->getErrors())->withInput()->withDangerMessage('There where some validation errors.');
});

App::error(function(InvalidArgumentException $exception, $code)
{
    Log::error($exception);
//    return Redirect::home()->withInfoMessage('Sorry, that page doesn\'t exist');
});


App::error(function(TokenMismatchException $exception, $code)
{
    Log::error($exception);
//    return Redirect::to('/login')->withWarningMessage('Expired session, please login');
});



App::error(function(Exception $exception, $code)
{
	Log::error($exception);
});






/*
|--------------------------------------------------------------------------
| Maintenance Mode Handler
|--------------------------------------------------------------------------
|
| The "down" Artisan command gives you the ability to put an application
| into maintenance mode. Here, you will define what is displayed back
| to the user if maintenance mode is in effect for the application.
|
*/

App::down(function()
{
	return Response::make("Be right back!", 503);
});

/*
|--------------------------------------------------------------------------
| Require The Filters File
|--------------------------------------------------------------------------
|
| Next we will load the filters file for the application. This gives us
| a nice separate location to store our route and application filter
| definitions instead of putting them all in the main routes file.
|
*/

require app_path().'/filters.php';
require app_path().'/macros.php';
require app_path().'/composers.php';

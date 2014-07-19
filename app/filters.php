<?php

/*
|--------------------------------------------------------------------------
| Application & Route Filters
|--------------------------------------------------------------------------
|
| Below you will find the "before" and "after" events for the application
| which may be used to do any work before or after a request into your
| application. Here you may also register your custom route filters.
|
*/

App::before(function($request)
{
	//
});


App::after(function($request, $response)
{
	//
});

/*
|--------------------------------------------------------------------------
| Authentication Filters
|--------------------------------------------------------------------------
|
| The following filters are used to verify that the user of the current
| session is logged into this application. The "basic" filter easily
| integrates HTTP Basic authentication for quick, simple checking.
|
*/

Route::filter('auth', function()
{
	if (Auth::guest())
	{
		if (Request::ajax())
		{
			return Response::make('Unauthorized', 401);
		}
		else
		{
			return Redirect::guest('login');
		}
	}
});

Route::filter('administrator', function()
{
    if (Auth::user()->userable_type != 'Administrator')
    {
        if (Request::ajax())
        {
            return Response::make('You are not a Administrator', 401);
        }
        else
        {
            return Redirect::to('dashboard')->withInfoMessage('Sorry, we don\'t find what you are looking for' );
        }
    }
});

Route::filter('ambassador', function()
{
    if (Auth::user()->userable_type != 'Ambassador')
    {
        if (Request::ajax())
        {
            return Response::make('You are not a Ambassador', 401);
        }
        else
        {
            return 'You are not a Ambassador';
        }
    }
});

Route::filter('student', function()
{
    if (Auth::user()->userable_type != 'Student')
    {
        if (Request::ajax())
        {
            return Response::make('You are not a Student', 401);
        }
        else
        {
            return Redirect::back('/')->withDangerMessage('You are not a Student');
        }
    }
});

Route::filter('representative', function()
{
    if (Auth::user()->userable_type != 'Representative')
    {
        if (Request::ajax())
        {
            return Response::make('You are not a Representative', 401);
        }
        else
        {
            return 'You are not a Representative';
        }
    }
});


Route::filter('auth.basic', function()
{
	return Auth::basic();
});

/*
|--------------------------------------------------------------------------
| Guest Filter
|--------------------------------------------------------------------------
|
| The "guest" filter is the counterpart of the authentication filters as
| it simply checks that the current user is not logged in. A redirect
| response will be issued if they are, which you may freely change.
|
*/

Route::filter('guest', function()
{
	if (Auth::check()) return Redirect::to('/');
});

/*
|--------------------------------------------------------------------------
| CSRF Protection Filter
|--------------------------------------------------------------------------
|
| The CSRF filter is responsible for protecting your application against
| cross-site request forgery attacks. If this special token in a user
| session does not match the one given in this request, we'll bail.
|
*/

Route::filter('csrf', function()
{
	if (Session::token() != Input::get('_token'))
	{
		throw new Illuminate\Session\TokenMismatchException;
	}
});

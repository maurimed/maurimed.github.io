<?php

class SessionsController extends \BaseController {


	/**
	 * Show the form for creating a new resource.
	 * GET /sessions/create
	 *
	 * @return Response
	 */
	public function create()
	{
        return Auth::guest() ? View::make('sessions.create') : Redirect::intended('dashboard');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /sessions
	 *
	 * @return Response
	 */
	public function store()
    {
        return Auth::attempt(Input::only('email', 'password')) ? Redirect::intended('dashboard') : Redirect::to('/login')->withInput()->withDangerMessage('Invalid Email/Password combination');

	}


	/**
	 * Remove the specified resource from storage.
	 * DELETE /sessions/{id}
	 *
	 * @return Response
	 */
	public function destroy()
	{
		Auth::logout();

        return Redirect::home();
	}

}
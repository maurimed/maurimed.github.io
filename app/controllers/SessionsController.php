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
		return View::make('sessions.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /sessions
	 *
	 * @return Response
	 */
	public function store()
	{
		if ( Auth::attempt( Input::only( 'email', 'password' ) ))
        {
//            if(Auth::user()->userable_type == 'Administrator')
//            {
                return Redirect::to('dashboard');
//            }
        }

        return Redirect::to('/login')->withInput()->withDangerMessage('Invalid Email/Password combination');
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
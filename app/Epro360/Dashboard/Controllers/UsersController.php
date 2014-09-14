<?php namespace Epro360\Dashboard\Controllers;

use Epro360\Forms\Users\UserEditForm;
use Epro360\Repos\Users\UserRepository;
use Input;
use Redirect;

class UsersController extends \BaseController {

    protected $userRepo;
    protected  $editForm;

    function __construct(UserRepository $userRepo, UserEditForm $editForm)
    {
        $this->userRepo = $userRepo;
        $this->editForm = $editForm;
    }

    /**
	 * Display a listing of the resource.
	 * GET /users
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /users/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /users
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /users/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{

        $this->editForm->validateUpdate($id, Input::all());

        $user = $this->userRepo->updateUser($id, Input::all());

        return  Redirect::to("dashboard/".path($user)."/$user->username/edit")
                            ->withSuccessMessage('Account Updated!');

	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
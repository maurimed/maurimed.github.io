<?php namespace Epro360\Admin\Controllers;

use Epro360\Forms\User\UserCreateForm;
use Epro360\Repos\Users\Administrators\AdministratorRepository;
use Epro360\Repos\Users\UserRepository;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use View;

class AdministratorsController extends \BaseController {


    protected  $userRepo;

    protected  $userForm;

    protected  $adminRepo;

    function __construct(UserRepository $userRepo, UserCreateForm $userForm, AdministratorRepository $adminRepo)
    {
        $this->userRepo = $userRepo;

        $this->userForm = $userForm;

        $this->adminRepo = $adminRepo;
    }

    /**
	 * Display a listing of the resource.
	 * GET /admins
	 *
	 * @return Response
	 */
	public function index()
	{
        $administrators = $this->userRepo->getAdmins();
        return View::make('admin.users.administrators.index', compact('administrators'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /admins/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admin.users.administrators.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /admins
	 *
	 * @return Response
	 */
	public function store()
	{

        $this->userForm->validate(Input::all());

        $user = $this->userRepo->create(Input::only(['email']));

        $admin = $this->adminRepo->create(Input::only(['firstname', 'lastname']));

        $admin->profile()->save($user);

        return Redirect::back()->withSuccessMessage("Administrator {$admin->firstname} was created!");
	}

	/**
	 * Display the specified resource.
	 * GET /admins/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /admins/{id}/edit
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
	 * PUT /admins/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{

	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /admins/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        $admin = $this->userRepo->findByAdminId($id);

        if($admin->id == 1 or $admin->profile->id == 1)
            return Redirect::back()->withDangerMessage('You can\'t delete the master administrator');

        $this->userRepo->delete($admin);

        return Redirect::back()->withSuccessMessage("Administrator was deleted!");

    }

}
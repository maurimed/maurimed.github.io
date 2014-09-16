<?php namespace Epro360\Dashboard\Controllers;

use Epro360\Forms\Administrator\AdministratorCreateForm;
use Epro360\Forms\Administrator\AdministratorEditForm;
use Epro360\Repos\Users\Administrators\AdministratorRepository;
use Epro360\Repos\Users\UserRepository;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Event;
use View;

class AdministratorsController extends \BaseController {

    protected  $userRepo;

    protected  $administratorRepo;

    protected  $createForm;

    protected  $editForm;

    function __construct(UserRepository $userRepo,
                         AdministratorRepository $administratorRepo,
                         AdministratorCreateForm $createForm,
                         AdministratorEditForm $editForm)
    {
        $this->userRepo = $userRepo;

        $this->administratorRepo = $administratorRepo;

        $this->createForm = $createForm;

        $this->editForm = $editForm;
    }

    /**
	 * Display a listing of the resource.
	 * GET /dashboard/administrators
	 *
	 * @return Response
	 */
	public function index()
	{
        $administrators = $this->userRepo->getAdmins();

        return View::make('dashboard.users.administrators.index', compact('administrators'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /dashboard/administrators/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('dashboard.users.administrators.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /dashboard/administrators
	 *
	 * @return Response
	 */
	public function store()
	{

        $this->createForm->validate(Input::all());

        $admin = $this->administratorRepo->create(Input::only(['firstname', 'lastname']));

        /** @var Array $admin */
        Event::fire('user.administrator.created', array_add($admin, 'email', Input::get('email') ));

        return Redirect::back()->withSuccessMessage("Administrator {$admin->firstname} was created!");
	}

	/**
	 * Display the specified resource.
	 * GET /dashboard/administrators/{id}
	 *
	 * @param  int  $username
	 * @return Response
	 */
	public function show($username)
	{
		$administrator = $this->userRepo->findByUsername($username);

        return View::make('dashboard.users.administrators.show', compact('administrator'));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /dashboard/administrators/{id}/edit
	 *
	 * @param  int  $username
	 * @return Response
	 */
	public function edit($username)
	{
        $administrator = $this->userRepo->findByUsername($username);

        return View::make('dashboard.users.administrators.edit', compact('administrator'));
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /dashboard/administrators/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{

        $this->editForm->validate(Input::all());

        $this->administratorRepo->update(Input::all(), $id);

        return Redirect::back()->withSuccessMessage('Personal Info Updated');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /dashboard/administrators/{id}
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
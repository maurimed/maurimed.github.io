<?php namespace Epro360\Admin\Controllers;

use Epro360\Forms\User\UserCreateForm;
use Epro360\Repos\Users\Ambassadors\AmbassadorRepository;
use Epro360\Repos\Users\UserRepository;
use Input;
use Redirect;
use View;

class AmbassadorsController extends \BaseController {



    protected  $userRepo;

    protected  $userForm;

    protected  $ambassadorRepo;

    function __construct(UserRepository $userRepo, UserCreateForm $userForm, AmbassadorRepository $ambassadorRepo)
    {
        $this->userRepo = $userRepo;

        $this->userForm = $userForm;

        $this->ambassadorRepo = $ambassadorRepo;
    }

    /**
	 * Display a listing of the Ambassador.
	 * GET /ambassadors
	 *
	 * @return Response
	 */
	public function index()
	{
        $ambassadors = $this->ambassadorRepo->getAll();

        return View::make('admin.users.ambassadors.index', compact('ambassadors'));
	}

	/**
	 * Show the form for creating a new Ambassador.
	 * GET /ambassadors/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admin.users.ambassadors.create');

    }

	/**
	 * Store a newly created Ambassador in storage.
	 * POST /ambassadors
	 *
	 * @return Response
	 */
    public function store()
    {

        $this->userForm->validate(Input::all());

        $user = $this->userRepo->create(Input::only(['email']));

        $ambassador = $this->ambassadorRepo->create(Input::only(['firstname', 'lastname']));

        $ambassador->profile()->save($user);

        return Redirect::back()->withSuccessMessage("Ambassador {$ambassador->firstname} was created!");
    }

	/**
	 * Display the specified Ambassador.
	 * GET /ambassadors/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

    /**
     * Show the form for editing the specified Ambassador.
     * GET /ambassadors/{id}/edit
     *
     * @param $ambassador_id
     * @internal param int $id
     * @return Response
     */
	public function edit($ambassador_id)
	{
       $user = $this->userRepo->findByAmbassadorId($ambassador_id);

       return View::make('admin.users.profiles.edit', compact('user'));

    }

	/**
	 * Update the specified Ambassador in storage.
	 * PUT /ambassadors/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified Ambassador from storage.
	 * DELETE /ambassadors/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
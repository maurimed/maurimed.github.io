<?php namespace Epro360\Dashboard\Controllers;

use Epro360\Forms\Ambassador\AmbassadorCreateForm;
use Epro360\Forms\Ambassador\AmbassadorEditForm;
use Epro360\Repos\Users\Ambassadors\AmbassadorRepository;
use Epro360\Repos\Users\UserRepository;
use Event;
use Input;
use Redirect;
use View;

class AmbassadorsController extends \BaseController {

    protected  $userRepo;

    protected  $ambassadorRepo;

    protected  $createForm;

    protected  $editForm;

    function __construct(UserRepository $userRepo,
                         AmbassadorRepository $ambassadorRepo,
                         AmbassadorCreateForm $createForm,
                         AmbassadorEditForm $editForm)
    {
        $this->userRepo = $userRepo;

        $this->ambassadorRepo = $ambassadorRepo;

        $this->createForm = $createForm;

        $this->editForm = $editForm;
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

        return View::make('dashboard.users.ambassadors.index', compact('ambassadors'));
	}

	/**
	 * Show the form for creating a new Ambassador.
	 * GET /ambassadors/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('dashboard.users.ambassadors.create');

    }

	/**
	 * Store a newly created Ambassador in storage.
	 * POST /ambassadors
	 *
	 * @return Response
	 */
    public function store()
    {
        $this->createForm->validate(Input::all());

        $ambassador = $this->ambassadorRepo->create(Input::only(['firstname', 'lastname']));

        /** @var Array $ambassador */
        Event::fire('user.ambassador.created', array_add($ambassador, 'email', Input::get('email') ));

        return Redirect::back()->withSuccessMessage("Ambassador {$ambassador->firstname} was created!");
    }


    /**
     * Display the specified resource.
     * GET /dashboard/ambassadors/{id}
     *
     * @param  int  $username
     * @return Response
     */
    public function show($username)
    {
        $ambassador = $this->userRepo->findByUsername($username);

        return View::make('dashboard.users.ambassadors.show', compact('ambassador'));
    }

    /**
     * Show the form for editing the specified resource.
     * GET /dashboard/ambassadors/{id}/edit
     *
     * @param  int  $username
     * @return Response
     */
    public function edit($username)
    {
        $ambassador = $this->userRepo->findByUsername($username);

        return View::make('dashboard.users.ambassadors.edit', compact('ambassador'));
    }

    /**
     * Update the specified resource in storage.
     * PUT /dashboard/ambassadors/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {

        $this->editForm->validate(Input::all());

        $this->ambassadorRepo->update(Input::all(), $id);

        return Redirect::back()->withSuccessMessage('Personal Info Updated');
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
        $ambassador = $this->userRepo->findByAmbassadorId($id);

        $this->userRepo->delete($ambassador);

        return Redirect::back()->withSuccessMessage("Ambassador was deleted!");
	}

}
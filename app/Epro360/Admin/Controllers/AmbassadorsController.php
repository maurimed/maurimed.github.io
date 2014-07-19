<?php namespace Epro360\Admin\Controllers;

use Epro360\Repos\Users\UserRepository;
use Input;
use Redirect;
use View;

class AmbassadorsController extends \BaseController {



    private $userRepo;

    function __construct(UserRepository $userRepo)
    {
        $this->userRepo = $userRepo;
    }

    /**
	 * Display a listing of the Ambassador.
	 * GET /ambassadors
	 *
	 * @return Response
	 */
	public function index()
	{
        $ambassadors = $this->userRepo->getAmbassadors();

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

        $userInfo = Input::only(['email']);
        $ambassadorInfo = Input::only(['firstname', 'lastname']);

        $admin = $this->userRepo->create($ambassadorInfo, $userInfo, 'Ambassador');

        return Redirect::back()->withSuccessMessage("Ambassador {$admin->firstname} was created!");
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
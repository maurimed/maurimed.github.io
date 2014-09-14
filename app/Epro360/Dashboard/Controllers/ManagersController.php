<?php namespace Epro360\Dashboard\Controllers;

use Epro360\Forms\Manager\ManagerCreateForm;
use Epro360\Repos\Institutions\Universities\UniversitiesRepository;
use Epro360\Repos\Locations\CountriesRepository;
use Epro360\Repos\Users\Managers\ManagerRepository;
use Epro360\Repos\Users\UserRepository;
use Event;
use Input;
use Redirect;
use View;

class ManagersController extends \BaseController {

    protected $managerRepo;

    private $universityRepo;

    private $countryRepo;

    private $managerForm;
    /**
     * @var
     */
    private $userRepo;


    function __construct(
        ManagerRepository $managerRepo,
        UniversitiesRepository $universityRepo,
        CountriesRepository $countryRepo,
        ManagerCreateForm $managerForm,
        UserRepository $userRepo
    )
    {
        $this->managerRepo = $managerRepo;
        $this->universityRepo = $universityRepo;
        $this->countryRepo = $countryRepo;
        $this->managerForm = $managerForm;
        $this->userRepo = $userRepo;
    }

    /**
	 * Display a listing of the resource.
	 * GET /manager
	 *
	 * @return Response
	 */
	public function index()
	{
        $managers = $this->managerRepo->getAll();

		return View::make('dashboard.users.managers.index', compact('managers'));
	}

    /**
	 * Show the form for creating a new resource.
	 * GET /manager/create
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make('dashboard.users.managers.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /manager
	 *
	 * @return Response
	 */
	public function store()
	{
        $this->managerForm->validate(Input::all());

        $manager = $this->managerRepo->create(Input::only(['firstname', 'lastname', 'universities']));

        /** @var array $manager */
        Event::fire('user.manager.created', array_add($manager, 'email', Input::get('email') ));

        return Redirect::back()->withSuccessMessage("Manager {$manager->firstname} was created!");

    }

	/**
	 * Display the specified resource.
	 * GET /manager/{id}
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
	 * GET /manager/{id}/edit
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
	 * PUT /manager/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /manager/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
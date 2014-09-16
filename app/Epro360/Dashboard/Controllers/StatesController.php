<?php namespace Epro360\Dashboard\Controllers;

use Epro360\Repos\Locations\CountriesRepository;
use Epro360\Repos\Locations\StatesRepository;
use Input;
use Redirect;
use Request;
use View;

class StatesController extends \BaseController {

    private $statesRepo;

    private $countriesRepo;


    function __construct(StatesRepository $statesRepo, CountriesRepository $countriesRepo)
    {
        $this->statesRepo = $statesRepo;
        $this->countriesRepo = $countriesRepo;
    }

    /**
	 * Display a listing of the resource.
	 * GET /states
	 *
	 * @return Response
	 */
	public function index()
	{
        $states = $this->statesRepo->getAll();

		return View::make('dashboard.locations.states.index', compact('states'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /states/create
	 *
	 * @return Response
	 */
	public function create()
	{
        $countries = $this->countriesRepo->countriesList();

        return View::make('dashboard.locations.states.create', compact('countries'));

    }

	/**
	 * Store a newly created resource in storage.
	 * POST /states
	 *
	 * @return Response
	 */
	public function store()
	{
        $this->statesRepo->create(Input::all());

        return Redirect::route('dashboard.states.create')->withSuccessMessage('State was added to the list!');
	}

	/**
	 * Display the specified resource.
	 * GET /states/{id}
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
	 * GET /states/{id}/edit
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
	 * PUT /states/{id}
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
	 * DELETE /states/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)

	{
		//
	}


    public function lists()
    {

        $states = $this->statesRepo->getListByCountryCode(Input::get('country_code'));

        return View::make('dashboard.locations.states.lists', compact('states'));
    }

    public function jsonLists()
    {
        if(Request::ajax())
            return $this->statesRepo->getListByCountryCode(Input::get('id'));
    }

}
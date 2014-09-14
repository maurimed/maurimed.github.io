<?php namespace Epro360\Dashboard\Controllers;

use Epro360\Repos\Institutions\Universities\UniversitiesRepository;
use Epro360\Repos\Locations\CitiesRepository;
use Epro360\Repos\Locations\CountriesRepository;
use Epro360\Repos\Locations\StatesRepository;
use Input;
use Redirect;
use View;

class UniversitiesController extends \BaseController {

    protected $universitiesRepo;

    protected $countriesRepo;

    protected $statesRepo;

    protected $citiesRepo;

    function __construct(
        UniversitiesRepository  $universitiesRepo,
        CountriesRepository $countriesRepo,
        StatesRepository $statesRepo,
        CitiesRepository $citiesRepo
    )
    {
        $this->universitiesRepo = $universitiesRepo;

        $this->countriesRepo = $countriesRepo;

        $this->statesRepo = $statesRepo;

        $this->citiesRepo = $citiesRepo;
    }

    /**
	 * Display a listing of the resource.
	 * GET /universities
	 *
	 * @return Response
	 */
	public function index()
	{

		return View::make('dashboard.institutions.universities.index');

	}


    public function table()
    {
        return $this->universitiesRepo->dataTable();
    }

	/**
	 * Show the form for creating a new resource.
	 * GET /universities/create
	 *
	 * @return Response
	 */
	public function create()
	{

        $countries = $this->countriesRepo->countriesList();

        return View::make('dashboard.institutions.universities.create', compact('countries'));

    }

    /**
     * Store a newly created resource in storage.
     * POST /universities
     *
     * @return Response
     */
    public function store()
    {
        $this->universitiesRepo->save(Input::all());

        return Redirect::back()->withSuccessMessage('The University has been saved');
    }

    /**
	 * Display the specified resource.
	 * GET /universities/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$university = $this->universitiesRepo->findById($id);

        return View::make('dashboard.institutions.universities.partials.show', compact('university'));
	}

    /**
	 * Show the form for editing the specified resource.
	 * GET /universities/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $university = $this->universitiesRepo->findById($id);

        return View::make('dashboard.institutions.universities.partials.edit', compact('university'));
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /universities/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input =  array_add(Input::get(), 'id', $id);

        $this->universitiesRepo->update($input);

        return Redirect::to('dashboard/universities')->withSuccessMessage('University Updated!');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /universities/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		return 'Deleting the university with the id of ' . $id;
	}


    public function lists()
    {
        return $this->universitiesRepo->listsByCity(Input::get('id'));
    }

    public function countriesList()
    {
        return $this->countriesRepo->countriesHasUniversitiesList();
    }

    public function statesList()
    {
        return $this->statesRepo->getListByCountryCodeHasUniversities(Input::get('id'));
    }


    public function citiesList()
    {
        return $this->citiesRepo->getListByStateIdHasUniversities(Input::get('id'));
    }
}
<?php namespace Epro360\Admin\Controllers;

use Epro360\Repos\Institutions\Universities\UniversitiesRepository;
use Epro360\Repos\Locations\CountriesRepository;
use Input;
use View;

class UniversitiesController extends \BaseController {

    protected $universitiesRepo;

    protected $countriesRepo;

    function __construct(UniversitiesRepository  $universitiesRepo, CountriesRepository $countriesRepo)
    {
        $this->universitiesRepo = $universitiesRepo;

        $this->countriesRepo = $countriesRepo;
    }

    /**
	 * Display a listing of the resource.
	 * GET /universities
	 *
	 * @return Response
	 */
	public function index()
	{
        $universities = $this->universitiesRepo->getAll();

		return View::make('admin.institutions.universities.index', compact('universities'));
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

        return View::make('admin.institutions.universities.create', compact('countries'));

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

        return \Redirect::back()->withSuccessMessage('The University has been saved');
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
		//
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
		//
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
		//
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
		//
	}

}
<?php namespace Epro360\Admin\Controllers;

use Epro360\Repos\Locations\CountriesRepository;
use Input;
use Redirect;
use View;

class CountriesController extends \BaseController {

    private $countriesRepo;

    function __construct(CountriesRepository $countriesRepo)
    {
        $this->countriesRepo = $countriesRepo;
    }


    /**
	 * Display a listing of the resource.
	 * GET /countries
	 *
	 * @return Response
	 */
	public function index()
	{
        $countries = $this->countriesRepo->getAll();

		return View::make('admin.locations.countries.index',compact('countries'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /countries/create
	 *
	 * @return Response
	 */
	public function create()
	{
        $continents = $this->countriesRepo->continentsList();

        return View::make('admin.locations.countries.create', compact('continents'));
    }

	/**
	 * Store a newly created resource in storage.
	 * POST /countries
	 *
	 * @return Response
	 */
	public function store()
	{

        $this->countriesRepo->create(Input::all());

        return Redirect::route('dashboard.countries.create')->withSuccessMessage('Country was added to the list!');
	}

	/**
	 * Display the specified resource.
	 * GET /countries/{id}
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
	 * GET /countries/{id}/edit
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
	 * PUT /countries/{id}
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
	 * DELETE /countries/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
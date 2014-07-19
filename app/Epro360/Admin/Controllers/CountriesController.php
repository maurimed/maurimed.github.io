<?php namespace Epro360\Admin\Controllers;

use Country;
use Epro360\Repos\Locations\ContinentsRepository;
use Epro360\Repos\Locations\CountriesRepository;
use Input;
use Redirect;
use View;

class CountriesController extends \BaseController {

    private $continentsRepo;
    private $countriesRepo;

    function __construct(ContinentsRepository $continentsRepo, CountriesRepository $countriesRepo)
    {
        $this->continentsRepo = $continentsRepo;
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
        $continents = $this->continentsRepo->continentsList();

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
        $continents = $this->continentsRepo->continentsList();
        $country = $this->countriesRepo->findById($id);
		return View::make('admin.locations.countries.edit', compact('continents', 'country'));
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
        $this->countriesRepo->update(Input::all(), $id);

        return Redirect::back()->withSuccessMessage('Country was updated!');
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
        $this->countriesRepo->destroy($id);

        return Redirect::back()->withSuccessMessage('The country was removed');
	}

//    public function ajax($id)
//    {
//        return Country::find($id);
//    }

}
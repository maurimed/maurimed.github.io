<?php namespace Epro360\Admin\Controllers;

use Epro360\Repos\Locations\CitiesRepository;
use Epro360\Repos\Locations\CountriesRepository;
use Input;
use View;
use Redirect;

class CitiesController extends \BaseController {

    private $countriesRepo;

    private $citiesRepo;

    function __construct(CitiesRepository $citiesRepo, CountriesRepository $countriesRepo)
    {
        $this->countriesRepo = $countriesRepo;

        $this->citiesRepo = $citiesRepo;
    }

    /**
	 * Display a listing of the resource.
	 * GET /cities
	 *
	 * @return Response
	 */
    public function index()
    {
        return View::make('admin.locations.cities.index');
    }



	/**
	 * Show the form for creating a new resource.
	 * GET /cities/create
	 *
	 * @return Response
	 */
	public function create()
	{
        $countries = $this->countriesRepo->countriesList();

        return View::make('admin.locations.cities.create', compact('countries'));
    }

	/**
	 * Store a newly created resource in storage.
	 * POST /cities
	 *
	 * @return Response
	 */
	public function store()
	{
        $this->citiesRepo->create(Input::all());

        return Redirect::route('dashboard.cities.create')->withSuccessMessage('City was added to the list!');
	}

	/**
	 * Display the specified resource.
	 * GET /cities/{id}
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
	 * GET /cities/{id}/edit
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
	 * PUT /cities/{id}
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
	 * DELETE /cities/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

    /**
     *@return Response
     */
    public function ajax()
    {
        return $this->citiesRepo->makeDatatable('cities', 'id', $_GET);

    }



    public function lists()
    {
        $cities = $this->citiesRepo->getListByStateAb(Input::get('state_ab'));

        return View::make('admin.locations.cities.lists', compact('cities'));
    }

    public function zipLists()
    {
        $zips = $this->citiesRepo->getZipListByCity(Input::get('city'));

        return View::make('admin.locations.zips.lists', compact('zips'));
    }
}
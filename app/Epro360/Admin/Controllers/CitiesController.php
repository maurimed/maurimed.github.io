<?php namespace Epro360\Admin\Controllers;

use Epro360\Repos\Locations\CitiesRepository;
use View;
use Redirect;

class CitiesController extends \BaseController {

    private $citiesRepo;

    function __construct(CitiesRepository $citiesRepo)
    {
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
     *@return Response
     */
    public function ajax()
    {

        return $this->citiesRepo->makeDatatable('cities', 'id', $_GET);


    }

	/**
	 * Show the form for creating a new resource.
	 * GET /cities/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /cities
	 *
	 * @return Response
	 */
	public function store()
	{
		//
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

}
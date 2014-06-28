<?php namespace Epro360\Admin\Controllers;

class AmbassadorsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /ambassadors
	 *
	 * @return Response
	 */
	public function index()
	{
        $ambassadors = \Ambassador::with('profile')->get();
        return \View::make('admin.ambassadors.index', compact('ambassadors'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /ambassadors/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /ambassadors
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
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
	 * Show the form for editing the specified resource.
	 * GET /ambassadors/{id}/edit
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
	 * Remove the specified resource from storage.
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
<?php namespace Epro360\Admin\Controllers;

class RepresentativesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /representatives
	 *
	 * @return Response
	 */
	public function index()
	{
        $representatives = \Representative::with('profile')->get();
        return \View::make('admin.representatives.index', compact('representatives'));

    }

	/**
	 * Show the form for creating a new resource.
	 * GET /representatives/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /representatives
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /representatives/{id}
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
	 * GET /representatives/{id}/edit
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
	 * PUT /representatives/{id}
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
	 * DELETE /representatives/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
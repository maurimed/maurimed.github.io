<?php namespace Epro360\Admin\Controllers;

use View;

class RequirementsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /requirements
	 *
	 * @return Response
	 */
	public function index()
	{
        $requirements = \Requirement::all();
		return View::make('admin.requirements.index', compact('requirements'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /requirements/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /requirements
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /requirements/{id}
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
	 * GET /requirements/{id}/edit
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
	 * PUT /requirements/{id}
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
	 * DELETE /requirements/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
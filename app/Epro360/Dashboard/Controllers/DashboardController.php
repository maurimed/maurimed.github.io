<?php namespace Epro360\Dashboard\Controllers;

use View;

class DashboardController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /dashboard
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('dashboard.index');
	}


}
<?php namespace Epro360\Dashboard\Controllers;

use Epro360\Repos\Promos\PromoRepository;
use Input;
use Promo;
use Redirect;
use View;

class PromosController extends \BaseController {

    private $promoRepo;

    function __construct(PromoRepository $promoRepo)
    {
        $this->promoRepo = $promoRepo;
    }

    /**
	 * Display a listing of the resource.
	 * GET /promos
	 *
	 * @return Response
	 */
	public function index()
	{
        $promos = Promo::with('owner')->get();

        return View::make('dashboard.promos.index', compact('promos'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /promos/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('dashboard.promos.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /promos
	 *
	 * @return Response
	 */
	public function store()
	{

		$this->promoRepo->create( Input::all() );

        return Redirect::back()->withSuccessMessage('Promo was created');
	}

	/**
	 * Display the specified resource.
	 * GET /promos/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$promo = $this->promoRepo->findById($id);

        return View::make('dashboard.promos.show', compact('promo'));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /promos/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$promo = $this->promoRepo->findById($id);

        return View::make('dashboard.promos.edit', compact('promo'));
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /promos/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
        $this->promoRepo->update( Input::all(), $id );

        return Redirect::to('dashboard/promos')->withSuccessMessage('Promo was modified');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /promos/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->promoRepo->destroy( $id );

        return Redirect::to('dashboard/promos')->withSuccessMessage('Promo was deleted');
	}

}
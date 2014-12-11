<?php namespace Epro360\Dashboard\Controllers;

use Epro360\Repos\Locations\CountriesRepository;
use Guzzle\Http\Client;
use Input;
use Redirect;
use Request;
use Subscriber;
use View;


class SubscribersController extends \BaseController {


    protected $countryRepo;

    function __construct(CountriesRepository $countryRepo)
    {
        $this->countryRepo = $countryRepo;
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $subscribers = Subscriber::latest()->get();

		return \View::make('dashboard.subscribers.index', compact('subscribers'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function getIp()
	{
        $countries = $this->countryRepo->countriesList();

//        $ip = Request::getClientIp();

        $ip = "190.214.93.130";

        $client = new Client("http://ipinfo.io/");

        $response = $client->get( $ip . '/geo' )->send();

        $location = $response->json();

        if (!isset($location['country']))$location['country'] = '';

        $currentCountry = $location['country'];

        return View::make('site.pages.subscribers.countries-list', compact('countries', 'currentCountry'));
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
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
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$subscriber = Subscriber::find($id);

		return View::make('dashboard.subscribers..edit', compact('subscriber'));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$subscriber = Subscriber::find($id);

		$subscriber->name = Input::get('name');
		$subscriber->email = Input::get('email');
		$subscriber->phone = Input::get('phone');
		$subscriber->interest = Input::get('interest');
		$subscriber->age = Input::get('age');
		$subscriber->find_us = Input::get('about');
		$subscriber->save();

		return Redirect::back()->withSuccessMessage('Subscriber was updated!');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        Subscriber::find($id)->delete();

        return Redirect::to('dashboard/subscribers')->withSuccessMessage('Subscriber was deleted');

    }


}

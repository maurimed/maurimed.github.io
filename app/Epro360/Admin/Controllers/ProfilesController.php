<?php namespace Epro360\Admin\Controllers;

use Epro360\Repos\Locations\CountriesRepository;
use Epro360\Repos\Users\UserRepository;
use Illuminate\Support\Facades\Input;
use Redirect;
use View;


class ProfilesController extends \BaseController {

    private $userRepo;

    private $countriesRepo;


    function __construct(UserRepository $userRepo, CountriesRepository $countriesRepo)
    {
        $this->userRepo = $userRepo;
        $this->countriesRepo = $countriesRepo;
    }


    /**
	 * Display a listing of the resource.
	 * GET /profiles
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /profiles/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /profiles
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

    /**
     * Display the specified resource.
     * GET /profiles/{id}
     *
     * @param $slug
     * @return Response
     */
	public function show($slug)
	{
        $user = $this->userRepo->findByUsername($slug);

        return View::make('admin.users.profiles.show', compact('user'));
	}

    /**
     * Show the form for editing the specified resource.
     * GET /profiles/{id}/edit
     *
     * @param $slug
     * @internal param int $id
     * @return Response
     */
	public function edit($slug)
	{
        $user = $this->userRepo->findByUsername($slug);

        $countries = $this->countriesRepo->countriesList();

		return View::make('admin.users.profiles.edit', compact('user', 'countries'));
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /profiles/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
        $user = $this->userRepo->update(Input::all(), $id);


        return \Redirect::to('dashboard/users/'.$user->username.'/profile');

	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /profiles/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


    public function checkUsername()
    {
            $username = Input::get('username');
            $usernameTaken = \User::whereUsername($username)->first();
            if($usernameTaken->id == \Auth::user()->id ){
                return true;
            }
            else if($usernameTaken)
            {
                return false;
            }

    }

}
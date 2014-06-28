<?php namespace Epro360\Admin\Controllers;

use Administrator;
use Epro360\Repos\UserRepository;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Str;
use View;

class AdministratorsController extends \BaseController {


    private $userRepo;

    function __construct(UserRepository $userRepo)
    {
        $this->userRepo = $userRepo;
    }

    /**
	 * Display a listing of the resource.
	 * GET /admins
	 *
	 * @return Response
	 */
	public function index()
	{
        $administrators = $this->userRepo->getAdmins();
        return View::make('admin.administrators.index', compact('administrators'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /admins/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admin.administrators.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /admins
	 *
	 * @return Response
	 */
	public function store()
	{

        // AdministratorCreator::create(Input::all());
        $password = str_random(15);

        // Grab data
        $userInfo = Input::only(['email']);
        $adminInfo = Input::only(['firstname', 'lastname']);

        // Create user
        $user = \User::create($userInfo);

        // Create admin
        $admin = new Administrator;
        $admin->firstname = $adminInfo['firstname'];
        $admin->lastname = $adminInfo['lastname'];
        $admin->created_by = \Auth::user()->id;
        $admin->save();

        // Link the admin to an user profile
        $user->userable_id = $admin->id;
        $user->userable_type = 'Administrator';
        $user->email =  $userInfo['email'];
        $user->username = Str::slug( $userInfo['email'] );
        $user->password = Hash::make($password);

        // Save the user profile
        $user->save();


        // Send email with password
        $subject = "";

        $data = [
            'title'    => $subject,
            'password' => $password,
            'username' => $user->username,
            'lastname' => $user->lastname
        ];


        Mail::send('emails.notifications.admin-account-created', $data, function($message) use ($user, $password)
        {
            $message->to($user->email, $user->firstname)->subject("Epro 360 Administrator account created!");
        });


        return Redirect::back()->withSuccessMessage("Administrator {$admin->firstname} was created!");
	}

	/**
	 * Display the specified resource.
	 * GET /admins/{id}
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
	 * GET /admins/{id}/edit
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
	 * PUT /admins/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /admins/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
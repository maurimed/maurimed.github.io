<?php namespace Epro360\Admin\Controllers;


use Epro360\Repos\Users\UserRepository;
use Input;
use Redirect;

class StudentsController extends \BaseController {

    protected $userRepo;

    function __construct(UserRepository $userRepo)
    {
        $this->userRepo = $userRepo;
    }

    /**
	 * Display a listing of the resource.
	 * GET /students
	 *
	 * @return Response
	 */
	public function index()
	{
        $students = $this->userRepo->getStudents();

        return \View::make('admin.users.students.index', compact('students'));
    }

	/**
	 * Show the form for creating a new resource.
	 * GET /students/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return \View::make('admin.users.students.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /students
	 *
	 * @return Response
	 */
	public function store()
	{

        $userInfo = Input::only(['email']);
        $ambassadorInfo = Input::only(['firstname', 'lastname']);

        $admin = $this->userRepo->create($ambassadorInfo, $userInfo, 'Student');

        return Redirect::back()->withSuccessMessage("Student {$admin->firstname} was created!");
	}

	/**
	 * Display the specified resource.
	 * GET /students/{id}
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
	 * GET /students/{id}/edit
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
	 * PUT /students/{id}
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
	 * DELETE /students/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
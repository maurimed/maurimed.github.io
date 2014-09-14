<?php namespace Epro360\Dashboard\Controllers;


use Epro360\Forms\User\AdministratorCreateForm;
use Epro360\Repos\Users\Students\StudentRepository;
use Epro360\Repos\Users\UserRepository;
use Input;
use Redirect;

class StudentsController extends \BaseController {


    protected  $userRepo;

    protected  $userForm;

    protected  $studentRepo;

    function __construct(UserRepository $userRepo, AdministratorCreateForm $userForm, StudentRepository $studentRepo)
    {
        $this->userRepo = $userRepo;

        $this->userForm = $userForm;

        $this->studentRepo = $studentRepo;
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

        return \View::make('dashboard.users.students.index', compact('students'));
    }

	/**
	 * Show the form for creating a new resource.
	 * GET /students/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return \View::make('dashboard.users.students.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /students
	 *
	 * @return Response
	 */
	public function store()
	{

        $this->userForm->validate(Input::all());

        $user = $this->userRepo->create(Input::only(['email']));

        $student = $this->studentRepo->create(Input::only(['firstname', 'lastname']));

        $student->profile()->save($user);

        return Redirect::back()->withSuccessMessage("Student {$student->firstname} was created!");
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
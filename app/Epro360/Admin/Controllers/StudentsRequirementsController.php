<?php namespace Epro360\Admin\Controllers;


use Epro360\Repos\Requirements\RequirementsRepository;
use Epro360\Repos\Students\AmbassadorsRepository;
use Redirect;
use Input;

class StudentsRequirementsController extends \BaseController {

    /**
     * @var StudentRepository
     */
    private  $studentRepo;

    /**
     * @var RequirementsRepository
     */
    private $requirementsRepo;

    /**
     * @param StudentRepository $studentRepo
     * @param RequirementsRepository $requirementsRepo
     */
    function __construct(AmbassadorsRepository $studentRepo, RequirementsRepository $requirementsRepo)
    {
        $this->studentRepo = $studentRepo;
        $this->requirementsRepo = $requirementsRepo;
    }

    /**
     * Display a listing of the resource.
     * GET /students
     *
     * @param $studentId
     * @return Response
     */
    public function index($studentId)
    {
        // As student I can't see other student's requirements
        if( ! canSeeStudent($studentId) ) return Redirect::to('dashboard')->withInfoMessage('The page you are looking for doesn\'t exist');

        $student = $this->requirementsRepo->getByStudentId($studentId);
        return \View::make('admin.users.students.requirements.index', compact('student'));

    }

    /**
     * Show the form for creating a new resource.
     * GET /dashboard/students/create
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     * POST /dashboard/students
     *
     * @param $studentId
     * @return Response
     */
    public function store($studentId)
    {

        $input = Input::except('_token');



        $this->requirementsRepo->saveStudentRequirements($input, $studentId);

        return Redirect::back()->withSuccessMessage('Files submitted!');


    }

    /**
     * Display the specified resource.
     * GET /dashboard/students/{id}
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
     * GET /dashboard/students/{id}/edit
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
     * PUT /dashboard/students/{id}
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
     * DELETE /dashboard/students/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}
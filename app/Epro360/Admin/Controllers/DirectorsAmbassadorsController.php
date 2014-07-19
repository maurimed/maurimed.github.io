<?php namespace Epro360\Admin\Controllers;


use Epro360\Repos\Directors\DirectorsRepository;
use Redirect;
use Input;

/**
 * Class DirectorsAmbassadorsController
 * @package Epro360\Admin\Controllers
 */
class DirectorsAmbassadorsController extends \BaseController {


    /**
     * @var DirectorsRepository
     */
    private $directorsRepo;

    /**
     * @param DirectorsRepository $directorsRepo
     */
    function __construct(DirectorsRepository $directorsRepo)
    {
        $this->directorsRepo = $directorsRepo;
    }

    /**
     * Display a listing of the resource.
     * GET /students
     *
     * @param $directorId
     * @return Response
     */
    public function index($directorId)
    {
        // As director I can't see other director's ambassadors
        if( ! canSeeDirector($directorId) )
            return Redirect::to('dashboard')
                    ->withInfoMessage('The page you are looking for doesn\'t exist');

        $director = $this->directorsRepo->getAmbassadors($directorId);

        return \View::make('admin.users.directors.ambassadors.index', compact('director'));

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

//        $input = Input::except('_token');
//
//
//
//        $this->directorsRepo->saveStudentRequirements($input, $studentId);
//
//        return Redirect::back()->withSuccessMessage('Files submitted!');


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
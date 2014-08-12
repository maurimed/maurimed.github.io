<?php  namespace Epro360\Repos\Institutions\Universities; 

use Bllim\Datatables\Datatables;
use Epro360\Forms\institutions\UniversityForm;
use University;

class UniversitiesRepository {

    protected $universityFom;

    function __construct( UniversityForm $universityFom)
    {
        $this->universityFom = $universityFom;
    }

    public function getAll()
    {
        return University::take(25)->get();
    }

    public function findById($id)
    {
        return University::findOrFail($id);
    }

    public function save($input)
    {
        $this->universityFom->validate($input);

        $university = new University;

        $university->name = $input['name'];
        $university->city_id = $input['zip'];
        $university->address = $input['address'];
        $university->website = $input['website'];
        $university->phone = $input['phone'];
        $university->email = $input['email'];
        $university->tuition_link = $input['tuition_link'];
        $university->admissions_link = $input['admissions_link'];
        $university->sports_division = $input['sports_division'];
        $university->closest_airport = $input['closest_airport'];
        $university->far_from_airport = $input['far_from_airport'];

        return $university->save();

    }

    public function dataTable()
    {
        $universities = University::rememberForever()->select([
            'id',
            'name',
            'city',
            'state',
            'country',
//            'zip',
            'address',
            'type',
            'info',
//            'web_url',
//            'phone',
//            'email',
//            'tuition_link',
//            'admissions_link',
//            'sports_division',
            'closest_airport',
//            'far_from_airport',
            'housing',
//            'postal',
            'years',
            'settings',
//            'tuition',
//            'created_at'
        ]);

        return Datatables::of($universities)
            ->edit_column('name', '<a href="/dashboard/universities/{{$id}}"  data-toggle="modal" data-target="#myModal" > {{ $name }} </a>')
            ->add_column('Actions', '<a href="/dashboard/universities/{{$id}}/edit" class="btn btn-xs btn-info" data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil hidden-md hidden-sm hidden-xs"></i> </a>
                                     <a href="/dashboard/universities/{{$id}}/delete" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-remove hidden-md hidden-sm hidden-xs"></i> </a>')
        ->make();
    }

}


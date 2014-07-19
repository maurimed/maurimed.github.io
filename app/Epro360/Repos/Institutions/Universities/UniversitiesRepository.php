<?php  namespace Epro360\Repos\Institutions\Universities; 

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
        return University::with('city.state.country')->get();
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

} 
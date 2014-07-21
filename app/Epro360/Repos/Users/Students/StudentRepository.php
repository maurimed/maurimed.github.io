<?php  namespace Epro360\Repos\Users\Students;

use Auth;
use Student;

class StudentRepository {

    public function getAll()
    {
        return Student::with(['profile', 'creator', 'city.state.country'])->get();
    }


    public function findById($id)
    {
        return Student::with('profile', 'creator', 'city.state.country')->findOrFail($id);
    }

    public function create($input)
    {

        $student = new Student;

        $student->firstname = $input["firstname"];

        $student->lastname = $input["lastname"];

        $student->created_by = Auth::user()->id;

        $student->save();

        return $student;
    }

} 
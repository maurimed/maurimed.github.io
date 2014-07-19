<?php  namespace Epro360\Repos\Users\Students;

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


} 
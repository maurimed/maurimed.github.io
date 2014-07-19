<?php  namespace Epro360\Repos\Users\Directors;

use Director;


class DirectorRepository {

    public function getAll()
    {
        return Director::with(['profile', 'creator', 'city.state.country'])->get();
    }


    public function findById($id)
    {
        return Director::with('profile', 'creator', 'city.state.country')->findOrFail($id);
    }

}
<?php  namespace Epro360\Repos\Users\Ambassadors;


use Ambassador;

class AmbassadorRepository {


    public function getAll()
    {
        return Ambassador::with(['profile', 'creator', 'city.state.country'])->get();
    }


    public function findById($id)
    {
        return Ambassador::with('profile', 'creator', 'city.state.country')->findOrFail($id);
    }



} 
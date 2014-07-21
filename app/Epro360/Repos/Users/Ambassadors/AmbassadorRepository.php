<?php  namespace Epro360\Repos\Users\Ambassadors;


use Ambassador;
use Auth;

class AmbassadorRepository {


    public function getAll()
    {
        return Ambassador::with(['profile', 'creator', 'city.state.country'])->get();
    }


    public function findById($id)
    {
        return Ambassador::with('profile', 'creator', 'city.state.country')->findOrFail($id);
    }

    public function create($input)
    {

        $ambassador = new Ambassador;

        $ambassador->firstname = $input["firstname"];

        $ambassador->lastname = $input["lastname"];

        $ambassador->created_by = Auth::user()->id;

        $ambassador->save();

        return $ambassador;
    }

}
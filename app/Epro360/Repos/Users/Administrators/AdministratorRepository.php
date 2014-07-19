<?php  namespace Epro360\Repos\Users\Administrators;

use Administrator;
use Auth;


class AdministratorRepository {

    public function getAll()
    {
        return Administrator::with(['profile', 'creator', 'city.state.country'])->get();
    }


    public function findById($id)
    {
        return Administrator::with('profile', 'creator', 'city.state.country')->findOrFail($id);
    }

    public function create($input)
    {

        $admin = new Administrator;

        $admin->firstname = $input["firstname"];

        $admin->lastname = $input["lastname"];

        $admin->created_by = Auth::user()->id;

        $admin->save();

        return $admin;
    }
} 
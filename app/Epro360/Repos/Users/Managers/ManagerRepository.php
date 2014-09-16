<?php  namespace Epro360\Repos\Users\Managers;


use Auth;
use Manager;

class ManagerRepository {

    public function getAll()
    {
        return Manager::with('profile')->get();
    }

    public function create($input)
    {
        $manager = new Manager;

        $manager->firstname = $input["firstname"];

        $manager->lastname = $input["lastname"];

        $manager->institutionable_id = $input["universities"];

        $manager->institutionable_type = 'University';

        $manager->created_by = Auth::user()->id;

        $manager->save();

        /** @var array $manager */

        return array_add($manager, 'password', str_random(15));

    }


}
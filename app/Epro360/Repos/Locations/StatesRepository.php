<?php  namespace Epro360\Repos\Locations;


use Country;
use State;

class StatesRepository {

    public function getAll()
    {
        return State::with([
            'country' => function($query){
                $query->get(['id', 'name', 'continent_id']);
            },
            'country.continent' => function($query){
                $query->get(['id', 'name']);
            }
        ])->get(['id', 'name', 'country_id']);
    }

    public function countriesList()
    {
        return Country::lists('name', 'id');
    }

    public function create($input)
    {
        $country = new State;
        $country->name = $input['name'];
        $country->country_id = $input['country_id'];
        $country->save();

    }

    public function findById($id)
    {
//        return  Administrator::with('profile')->findOrFail($id);
    }


} 
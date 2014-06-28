<?php  namespace Epro360\Repos\Locations;


use Continent;
use Country;

class CountriesRepository {

    public function getAll()
    {
        return Country::with(['continent' => function($query){
            $query->get(['id', 'name']);
        }])->get(['id', 'name', 'continent_id']);
    }

    public function continentsList()
    {
        return Continent::lists('name', 'id');
    }

    public function create($input)
    {
        $country = new Country;
        $country->name = $input['name'];
        $country->continent_id = $input['continent_id'];
        $country->save();

    }

    public function findById($id)
    {
//        return  Administrator::with('profile')->findOrFail($id);
    }


} 
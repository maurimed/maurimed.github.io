<?php  namespace Epro360\Repos\Locations;


use Country;

class CountriesRepository {

    public function getAll()
    {
        return Country::with(['continent' => function($query){
            $query->get(['id', 'name']);
        }])->get(['id', 'name', 'phonecode', 'continent_id']);
    }

    public function countriesList()
    {
        return Country::orderBy('name', 'ASC')->lists('name', 'id');
    }

    public function create($input)
    {
        $country = new Country;
        $country->name = $input['name'];
        $country->continent_id = $input['continent_id'];
        $country->phonecode = $input['phonecode'];
        return $country->save();

    }

    public function update($input,$id)
    {

        $country =$this->findById($id);
        $country->name = $input['name'];
        $country->continent_id = $input['continent_id'];
        $country->phonecode = $input['phonecode'];
        return $country->save();

    }

    public function findById($id)
    {
        return  Country::findOrFail($id);
    }

    public function destroy($id)
    {
        return Country::destroy($id);
    }


} 
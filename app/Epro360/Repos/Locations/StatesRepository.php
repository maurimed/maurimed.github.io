<?php  namespace Epro360\Repos\Locations;

use State;

class StatesRepository {

    public function getAll()
    {
        return State::with('country.continent')->get();
    }


    public function getListByCountryCode($country_code)
    {
        return State::orderBy('state_name', 'ASC')->whereCountryCode($country_code)->lists('state_name', 'id');
    }

} 
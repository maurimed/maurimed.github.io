<?php  namespace Epro360\Repos\Locations;

use State;

class StatesRepository {

    public function getAll()
    {
        return State::with('country.continent')->get();
    }

    public function getListByCountryCode($country_code)
    {
        return State::rememberForever()->whereCountryCode($country_code)->orderBy('state_name', 'ASC')->lists('state_name', 'id');
    }


    public function getListByCountryCodeHasUniversities($country_code)
    {
        return State::whereCountryCode($country_code)->has('universities')->orderBy('state_name', 'ASC')->lists('state_name', 'id');
    }

} 
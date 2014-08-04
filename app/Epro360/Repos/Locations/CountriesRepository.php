<?php  namespace Epro360\Repos\Locations;


use Country;

class CountriesRepository {

    public function countriesList()
    {
        return Country::orderBy('country_name', 'ASC')->lists('country_name', 'country_code');
    }

} 
<?php  namespace Epro360\Repos\Locations;


use Country;

class CountriesRepository {

    public function countriesList()
    {
        return Country::has('states')->orderBy('country_name', 'ASC')->lists('country_name', 'country_code');
    }


    public function getCountriesThatHasAmbassadors()
    {
        return Country::has('ambassadors')->get();
    }

} 
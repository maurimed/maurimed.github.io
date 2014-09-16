<?php  namespace Epro360\Repos\Locations;


use Country;

class CountriesRepository {

    public function countriesList()
    {
        return Country::rememberForever('countries.list')->has('states')->orderBy('country_name', 'ASC')->lists('country_name', 'country_code');
    }


    public function getCountriesThatHasAmbassadors()
    {
        return Country::has('ambassadors')->get();
    }

    public function countriesHasUniversitiesList()
    {
        return Country::has('universities')->orderBy('country_name', 'ASC')->lists('country_name', 'country_code');

    }


}
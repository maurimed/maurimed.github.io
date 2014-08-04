<?php  namespace Epro360\Repos\Locations;


use Country;

class CountriesRepository {

    public function countriesList()
    {
        return Country::orderBy('country_name', 'ASC')->lists('country_name', 'country_code');
    }

    public function getCountryByCountryCodeWithAmbassadors($countryCode)
    {
        return Country::rememberForever()->with(['cities' => function($q){
                    $q->rememberForever()->has('ambassadors')
                        ->with(['ambassadors' => function($q){
                            $q->rememberForever()->with(['profile' => function($q){$q->rememberForever();}]);
                        }, 'state'=> function($q){
                            $q->rememberForever();
                        }]);
                }])->whereCountryCode($countryCode)->first();
    }

} 
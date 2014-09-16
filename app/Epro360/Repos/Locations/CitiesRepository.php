<?php  namespace Epro360\Repos\Locations;


use City;
use Epro360\Admin\Datatables\SSP;
use Config;

class CitiesRepository {


    public function getAll()
    {
        return City::with(['state', 'country'])->get();

    }


    public function getListByStateId($state_id)
    {
        return City::rememberForever()->orderBy('city_name','ASC')->where('state_id', $state_id)->lists('city_name', 'id');

    }


    public function getListByStateIdHasUniversities($stateId)
    {

        return City::where('state_id', $stateId)->has('universities')->lists('city_name', 'id');
    }

}
<?php  namespace Epro360\Repos\Locations;


use City;
use Epro360\Admin\Datatables\SSP;
use Illuminate\Support\Facades\Config;
use State;

class CitiesRepository {

    public function getAll()
    {
        return City::paginate(3);
//        with([
//            'state' => function($query){
//                $query->get(['id', 'name', 'abbreviation' ,'country_id']);
//            },
//            'state.country' => function($query){
//                $query->get(['id', 'name', 'continent_id']);
//            },
//            'state.country.continent' => function($query){
//                $query->get(['id', 'name']);
//            }
//        ])->
//        return City::paginate(3);
    }

    public function countriesList()
    {
        return State::lists('name', 'id');
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




//    $this->citiesRepo->makeDatatable('cities', 'id', ['id', 'name', 'zip']);

    public  function makeDatatable($table, $primaryKey, $get)
    {


        $columns = [
            [ 'db' => 'id', 'dt' => 0 ],
            [ 'db' => 'name', 'dt' => 1 ],
            [ 'db' => 'zip',  'dt' => 2 ],

        ];

//        $sql_details= Config::get('database.default');
        $sql_details = [
            'user' => 'root',
            'pass' => 'root',
            'db'   => 'eprotest',
            'host' => 'localhost'
        ];

        return json_encode(
            SSP::simple( $get, $sql_details, $table, $primaryKey, $columns )
        );

    }
























}